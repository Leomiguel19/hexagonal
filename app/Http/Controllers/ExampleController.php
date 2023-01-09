<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserStroreController
{
    public function store($password)
    {
        (new userValidatorAuth())->validateUser();

        $user = new User();
        $user->password = (new UserPasswordHelper())->generatePasswordHard($password);
        $user->save();
    }
}

class userValidatorAuth
{
    public function validateUser()
    {
        if(!Auth::id() == 1213124)
        {
            throw exception('Error en auth');
        }
    }
}

class UserPasswordHelper
{
    public function generatePassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function generatePasswordHard($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
}
