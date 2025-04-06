<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);
        if(!$user){
            abort(404, "User not found");
        }

        return view('home', [
            'user' => $user,

        ]);
    }
}
