<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
       $name = "Fadel Muhammad Aslam";
       $contohArray = ["Senin", "Selasa", 10, 7.90];

       $a = 10;
       $b = 20;
       $c = $a+$b;

    //    Parsing Data Array to Views();
       return view('dosen/biodata', ['nama' => $name, 'lemparanDataArray' => $contohArray, 'sum' => $c ]);
    }
}
