<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'san_phams';

    protected $fillable = [
        'ma_san_pham',
        'ten_san_pham',
        'slug_san_pham',
        'is_open',
        'don_gia_ban',
        'don_gia_khuyen_mai',
        'danh_muc_id',
        'hinh_anh',
        'mo_ta_ngan',
        'mo_ta_chi_tiet',
    ];
    public function scopeSearch($query){
        if(request('key')) {
           $key = request('key');
           $query = $query->where('ten_san_pham','like','%'.$key.'%');
        }
        if(request('id_danh_muc')){
           $query = $query->where('danh_muc_id',request('id_danh_muc'));
        }
        return $query;
   }

   
}
