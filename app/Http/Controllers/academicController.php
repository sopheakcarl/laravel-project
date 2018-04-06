<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class academicController extends Controller
{
    public function foundation()
    {
        return "foundation page";
    }
    public function associate()
    {
        return "associate page";
    }
    public function bachelor()
    {
        return "bachelor degree page";
    }
    public function master()
    {
        return "master degree page";
    }
    public function bridging()
    {
        return "bridging course";
    }
    public function mis()
    {
        return "mis course";
    }
}
