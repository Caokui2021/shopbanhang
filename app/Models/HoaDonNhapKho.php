<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonNhapKho extends Model
{
    use HasFactory;

    protected $table = 'hoa_don_nhap_kho';

    protected $fillable = [
        'ma_hoa_don',
        'hash',
        'tong_tien',
        'tong_san_pham',
        'tinh_trang',
        'hinh_thuc_thanh_toan',
        'minh_chung',
    ];
}
