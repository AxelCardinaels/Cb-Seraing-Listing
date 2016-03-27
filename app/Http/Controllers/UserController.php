<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Validator, Input, Redirect;

class UserController extends Controller
{
  public function store(Request $request){

    $rules = [
      'prenom' => 'required',
      'nom' => 'required',
      'telephone' => 'required',
      'email' => 'required|unique:users|email',
      'grade' => 'required'
    ];

    $messages = [
      'required' => 'Ton :attribute ne peut pas être vide.',
      'unique' => 'L’adresse :attribute existe déja dans la base de donnée.',
      'email' => 'L’adresse email doit être au format exemple@test.com.'
    ];

    $validator = Validator::make($request->all(),$rules, $messages);




    if ($validator->fails())
    {
        var_dump($validator->messages());
        return redirect('/')
                    ->withErrors($validator)
                    ->withInput();

    }else{
      $user = new User;
      $user->prenom = $request->prenom;
      $user->nom = $request->nom;
      $user->telephone = $request->telephone;
      $user->email = $request->email;
      $user->grade = $request->grade;
      $user->save();

      return redirect('/')->with('status', 'Données enregistrées !');
    }



  }

}
