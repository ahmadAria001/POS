<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(String $id, String $name)
    {
        return view('user', ['id' => $id, 'name' => $name]);
    }
}
