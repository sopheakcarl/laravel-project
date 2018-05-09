<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminUserController extends Controller
{
    public function adduser()
    {
        return view('admin.dashboard');
    }


    public function logout()
    {
        return view('admin.admin_login');
    }
}
