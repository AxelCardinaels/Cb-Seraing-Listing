<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
  public function home(){
    $test = 1;
    return view('pages/home',['test' => $test]);
  }
}
