<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Auth;

class AccountAdmin extends Auth
{
    use HasFactory;

    protected $table = 'account_admin';

    protected $fillable = [
        'ho_lot',
        'ten',
        'email',
        'password',
        'so_dien_thoai',
        'gioi_tinh',
        'hinh_anh',
        'is_master',
        'is_rule',
        'is_block',
    ];
}
