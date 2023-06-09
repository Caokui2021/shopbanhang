<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_admin', function (Blueprint $table) {
            $table->id();
            $table->string('ho_lot');
            $table->string('ten');
            $table->string('email');
            $table->string('password');
            $table->string('hinh_anh');
            $table->string('so_dien_thoai');
            $table->integer('gioi_tinh');
            $table->integer('is_master')->default(0);
            $table->integer('is_rule')->nullable();
            $table->integer('is_block')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_admin');
    }
};
