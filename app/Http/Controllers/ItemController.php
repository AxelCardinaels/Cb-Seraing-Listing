<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator, Input, Redirect;
use App\item;

class ItemController extends Controller
{
  public function store(Request $request){

    $rules = [
      'prenom' => 'required',
      'nom' => 'required',
      'telephone' => 'required',
      'email' => 'required|unique:item|email',
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
        return redirect('/')
                    ->withErrors($validator)
                    ->withInput();

    }else{
      $item = new Item;
      $item->prenom = $request->prenom;
      $item->nom = $request->nom;
      $item->telephone = $request->telephone;
      $item->email = $request->email;
      $item->grade = $request->grade;
      $item->status = 0;
      $item->save();

      return redirect('/')->with('status', 'Données enregistrées, merci !');
    }
  }

  public function index(){
    $item = Item::all();
    return view(('user/index'),['items' => $item]);
  }

  public function unsigned(){
    $item = Item::get()->where('status',0);
    return view(('user/unsigned'),['items' => $item]);
  }

  public function update($id){
    DB::table('item')
            ->where('id', $id)
            ->update(['status' => 1]);
  }
}
