<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoryModel;
class categoryController extends Controller
{
    public function insertToCategory(Request $req)
    {
        $x=new categoryModel();
        $x->name=$req->name;
        $x->description=$req->desc;

        if($x->save()==true)
            return "Insert Success";
        else
            return 'Insert Fail';
    }
    public function showCategory()
    {
        return view('category');
    }
}
