<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function login(Request $request){
    if (Auth::attempt($request->only('email','password'))){
return redirect()-> route('welcome');
    }
    return back()-> with('error','Your credentials are incorrect');
}
public function Loginview(){
    return view('welcome');
}
}