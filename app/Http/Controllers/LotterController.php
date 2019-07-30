<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotterController extends Controller
{
    public function index (){
        return view('lottery/index');
    }

    public function count (){

    }
}
