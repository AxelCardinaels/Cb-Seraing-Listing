<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class PagesController extends Controller
{
  public function home(){
    return view('pages/home');
  }

  public function vault(){

    return view('pages/vault')->with(['users' => User::all()]);

  }

}
