<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function welcome(Request $request){
        return $request->all();
    }
}
