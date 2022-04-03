<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
     function getData(Request $req)
    {
       $req->validate([
           'studentname'=>'required',
           'matricno'=>'required',
           'curradd'=>'required',         
            'homeadd'=>'required',
           'email'=>'required',
           'phoneno'=>'required',
           'homeno'=>'required'
       ]);
        return $req->input();
    }
}
