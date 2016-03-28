<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Validator, Input, Redirect;
use Auth;

class AuthController extends Controller {

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
    	$data = $request->only('email','password');
		  $data['password'] = $data['password'];

        if(Auth::attempt($data))
        {
            return('succes');
        }
        $errors = ['fails' => 'no match'];

        return('failed');
    }


}
