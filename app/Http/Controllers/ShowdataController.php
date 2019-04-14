<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowdataController extends Controller
{
    //p
    public function getData(){
        $data = "hello world";
        return response()->json($data,200);
    }
}
