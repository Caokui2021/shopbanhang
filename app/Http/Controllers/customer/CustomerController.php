<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePassRequest;
use App\Http\Requests\infomation\profileRequest;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Customer;
use App\Jobs\ClientActive;
use App\Jobs\ResetPassword;
use App\Mail\ClientActiveMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function viewAuth() {
        $user = Auth::guard('customer')->check();
        if($user) {
            return redirect('/home-pages/index');
        }
        return view('customer.login');
    }

    public function viewRegister() {
        return view('customer.register');
    }

    public function postRegister(RegisterRequest $request) {
        $hash = Str::uuid()->toString();
        $data = $request->all();

        $data['hash']       = $hash;
        $data['password']   = bcrypt($request->password);
        $link = env('APP_URL') . 'kich-hoat/' . $hash;

        Customer::create($data);

        ClientActive::dispatch($request->email, $request->full_name, $link);

        return response()->json(['status' => true]);
    }

    public function active($hash)
    {
        $customer = Customer::where('hash', $hash)->first();
        if ($customer) {
            if ($customer->is_active == 1) {
                toastr()->warning("Tài khoản đã khích hoạt trước đó!");
            } else {
                toastr()->success("Email " . $customer->email . "đã được khích hoạt!");
                $customer->is_active = 1;
                $customer->save();
            }
        } else {
            toastr()->error("Mã kích hoạt không tồn tại");
        }
        return redirect('/home-pages/index');
    }

    public function postLogin(LoginRequest $request) {
        $data = $request->only('email', 'password');
        $login = Auth::guard('customer')->attempt($data); //trả về true false

        if ($login) {
            //Đã login rồi và có thể xem thông tin các tài khoảng đã login
            $user = Auth::guard('customer')->user(); //Lấy được thông tin tài khoảng đã login => Đã login
            if ($user->is_active == 1) {
                return response()->json([
                    'status' => 1,
                ]);
            } else {
                Auth::guard('customer')->logout(); //Ép logout => Chưa login
                return response()->json([
                    'status' => 2,
                ]);
            }
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function logout() {
        Auth::guard('customer')->logout();
        return redirect('/home-pages/index');

    }

    public function viewReset() {
        return view('customer.reset-pass');
    }

    public function postReset(Request $request) {
        $customer = Customer::where('email', $request->email)->first();
        if($customer) {
            $hash = Str::uuid();
            $customer->hash_reset = $hash;
            $customer->save();

            // Gửi email
            ResetPassword::dispatch($hash, $customer->email, $customer->full_name);
        }

        return response()->json([
            'status'    => true,
        ]);
    }

    public function viewChange($hash) {
        $customer = Customer::where('hash_reset', $hash)->first();
        if($customer) {
            return view('customer.change-password', compact('hash'));
        } else {
            toastr()->error('Liên kết không tồn tại!');
            return redirect('/home-pages/index');
        }
    }

    public function postChange(ChangePassRequest $request) {
        $customer = Customer::where('hash_reset', $request->hash)->first();
        $customer->password = bcrypt($request->password);
        $customer->hash_reset = '';
        $customer->save();

        return response()->json([
            'status'    => true,
        ]);
    }
}
