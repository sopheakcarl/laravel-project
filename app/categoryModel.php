<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    protected $fillable=['name','description'];
    protected $table = "category";
}
