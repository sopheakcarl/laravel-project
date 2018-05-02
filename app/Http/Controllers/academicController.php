<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class academicController extends Controller
{
    public function associate()
    {
        return view ('category/academic/associate');
        //return "associate page";
    }
    public function bachelor()
    {
        
        //return "bachelor degree page";
    }
    public function master()
    {
        return "master degree page";
    }
    public function design()
    {
        return view('category/academic/bachelorDesign');
    }
    public function mis()
    {
        return view ('category/academic/bachelorMis');
        //return "mis course";
    }
}
