<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'sex',
        'dob',
        'hinh_anh',
        'password',
        'is_active',
        'is_block',
        'hash',
        'hash_reset',
    ];
}
