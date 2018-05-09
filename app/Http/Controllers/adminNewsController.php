<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminNewsController extends Controller
{
    public function addnews()
    {
        return 'admin add news';
    }
    public function viewnews()
    {
        return 'admin view news';
    }
}
