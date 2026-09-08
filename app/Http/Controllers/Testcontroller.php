<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function check($a){
        return view('test',['a'=>$a]);
    }
}
