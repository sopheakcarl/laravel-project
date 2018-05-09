<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminAcademicController extends Controller
{
    public function associate()
    {
        return 'admin associate';
    }
    public function bachelor()
    {
        return 'admin bachelor';
    }
    public function master()
    {
        return 'admin master';
    }
}
