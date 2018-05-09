<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminITlearnController extends Controller
{
    public function programing()
    {
        return "admin programing";
    }
    public function network()
    {
        return "admin network";
    }
    public function design()
    {
        return "admin design";
    }
}
