<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function listuser() {
        $user = User::all();
        return view('admin.listuser', ['user'=>$user]);
    }

    public function newuser() {
        return view('admin.newuser');
    }
}
