<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login'); 
    }
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email'=> $request->input('email'),
        'password'=>$request->input('password')],$request->input('remember')
        ))
        {
            return redirect()->route('home');
        }
        return redirect()->back();
    }
}
