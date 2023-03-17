<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('account_admin')->insert([
            ['ho_lot' => 'Nguyen Van', 'ten' => 'Admin', 'email' => 'admin@admin.com', 'password' => bcrypt('123123'), 'hinh_anh' => 'https://cdn.tgdd.vn/Files/2019/07/25/1181745/chup-anh-hieu-ung-bokeh-la-gi-cach-chup-anh-bokeh-don-gian-bang-may-anh--2.jpg', 'so_dien_thoai' => 1231231231, 'gioi_tinh' => 0, 'is_master' => 0, 'is_block' => 0],
        ]);
    }
}
