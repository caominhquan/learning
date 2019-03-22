<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('login.testlogin');
    }

    public function postLogin(LoginRequest, $request){
    	$login = [
    		'username' = $request->username,
    		'password' = $request->password,
    		'level' = $request->1
    	]
    	if (Auth::attempt(['mail' => $email, 'password' => $password, 'level' => 1)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }else {
        	return redidect()->back();
        }
    }
}
