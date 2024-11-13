<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() // Pastikan ada kurung buka di sini
    {
        return view('index2'); // Pastikan file view index2.blade.php ada di direktori resources/views
    }
}
