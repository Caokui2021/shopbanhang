<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hoa_don_nhap_kho', function (Blueprint $table) {
            $table->id();
            $table->string('ma_hoa_don')->nullable();
            $table->string('hash');
            $table->integer('tong_tien')->nullable();
            $table->integer('tong_san_pham')->nullable();
            $table->integer('tinh_trang')->default(0);
            $table->integer('hinh_thuc_thanh_toan')->nullable();
            $table->string('minh_chung')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hoa_don_nhap_kho');
    }
};
