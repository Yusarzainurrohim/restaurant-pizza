<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Cashier;
use App\Models\Owner;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // View untuk role cashier
    public function users()
    {
        return view('admin.users');
    }

    // View untuk role cashier
    public function cashier()
    {
        return view('cashier.cashier');
    }

    // View untuk role admin
    public function admin()
    {
        return view('admin.admin');
    }

    // View untuk role owner
    public function owner()
    {
        return view('owner.owner');
    }
}
