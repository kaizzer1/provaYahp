<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser() 
    { 
        //$user = new user();
        //$user->name = 'George';
        //$user->email = 'george.bluth@reqres.in';
        //$user->password = Hash::make("admin");
       //$user->save();

        //echo "<h1>lista de usuarios</h1>";

        $user = User::where('id', '=', 1)->first(); 
        return view( 'listUser', [
        'user' => $user
        ]);
    }
}
