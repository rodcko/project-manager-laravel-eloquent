<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function insertUser() {
        $user = new User;
        $user->name = 'Rodcko';
        $user->save();

        return "Usuario Guardado";
    }
}
