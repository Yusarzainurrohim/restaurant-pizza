<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Cashier extends Authenticatable
{
    protected $table = 'cashier';

    protected $fillable = [
        'username',
        'password',
        'name',
        'address',
        'phone_number',
        // Tambahkan atribut lain yang relevan
    ];

    protected $hidden = ['password'];

    public $timestamps = false;
}
