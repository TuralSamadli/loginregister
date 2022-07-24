<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
public function register(Request $request){

$user=User::create([
'email'=>$request->email,
'password'=>Hash::make($request->password)

]);
if($user){
    return redirect()->route('welcome');

}}
public function index(){
    return view('register');
}
}
