<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public  function entrada(){
        return view('entrada');
    }
}
