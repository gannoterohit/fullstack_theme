<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
   public function desbord(){

    return view('backand.index');
   }
   public function form(){

    return view('backand.form');
   }

   public function login(){

    return view('backand.pages-login');
   }

}
