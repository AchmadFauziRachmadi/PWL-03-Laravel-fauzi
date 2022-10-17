<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;

class newcontroller extends Controller
{
    //
    public function show($name){
        return "Hello ".$name."...!";
    }
}
