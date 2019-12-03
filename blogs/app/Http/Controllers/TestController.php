<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function abcd(){
        return "Test Controller";
    }

    public function xyz(){
        return "xyz";
    }
}
