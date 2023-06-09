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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
            $table->integer('sex');
            $table->date('dob');
            $table->string('hinh_anh')->default('https://phongkhammayo.vn/hinh-doremon-va-doremi/imager_20_14891_700.jpg');
            $table->string('password');
            $table->integer('is_active')->default(0);
            $table->integer('is_block')->default(0);
            $table->string('hash')->nullable();
            $table->string('hash_reset')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
