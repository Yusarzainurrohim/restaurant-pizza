<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    protected $table = 'user';

    protected $fillable = [
        'username',
        'password',
        'nama',
        'role',
    ];

    // Menyembunyikan kolom password saat model diambil
    protected $hidden = [
        'password',
    ];

    public $timestamps = true;
}
