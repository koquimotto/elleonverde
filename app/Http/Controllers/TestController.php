<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function uno(){
        return view('tests.uno');
    }

    public function postTest(){
        return view('tests.postTest');
    }

    // public function createComment(){

    // }
}
