<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admin';

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
