<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DanhMucSeeder extends Seeder
{
    public function run()
    {
        DB::table('danh_muc')->insert([
            ['ma_danh_muc' => 'MDM1', 'ten_danh_muc' => 'Áo', 'slug_danh_muc' => 'ao', 'is_open' => 1, 'id_danh_muc_cha' => 0, 'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/DanhMuc/AnhDanhMucAo2.jpg'],
            ['ma_danh_muc' => 'MDM2', 'ten_danh_muc' => 'Quần', 'slug_danh_muc' => 'quan', 'is_open' => 1, 'id_danh_muc_cha' => 0, 'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/DanhMuc/DanhMucQuan.jpg'],
            ['ma_danh_muc' => 'MDM3', 'ten_danh_muc' => 'Balo', 'slug_danh_muc' => 'balo', 'is_open' => 1, 'id_danh_muc_cha' => 0, 'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/DanhMuc/DanhMucBalo.jpg'],
            ['ma_danh_muc' => 'MDM4', 'ten_danh_muc' => 'Giày', 'slug_danh_muc' => 'giay', 'is_open' => 1, 'id_danh_muc_cha' => 0, 'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/DanhMuc/DanhMucGiay.jpg'],
            ['ma_danh_muc' => 'MDM5', 'ten_danh_muc' => 'Mũ', 'slug_danh_muc' => 'mu', 'is_open' => 1, 'id_danh_muc_cha' => 0, 'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/DanhMuc/DanhMucMu.jpg'],
            ['ma_danh_muc' => 'MDM6', 'ten_danh_muc' => 'Áo Tee', 'slug_danh_muc' => 'ao-tee', 'is_open' => 1, 'id_danh_muc_cha' => 1, 'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/DanhMuc/AnhDanhMucAo2.jpg'],
            ['ma_danh_muc' => 'MDM7', 'ten_danh_muc' => 'Áo Polo', 'slug_danh_muc' => 'ao-polo', 'is_open' => 1, 'id_danh_muc_cha' => 1, 'hinh_anh' => 'http://127.0.0.1:8000/storage/photos/DanhMuc/AnhDanhMucAo2.jpg'],

        ]);
    }
}
