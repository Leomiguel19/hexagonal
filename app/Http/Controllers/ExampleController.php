<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserStroreController
{
    public function store($password)
    {
        (new userValidatorAuth())->validateUser();
        $user = new User();
        $helper = new UserHelper;
        $user->password = $helper->generatePassword($password);
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

class UserHelper
{
    public function generatePassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}
