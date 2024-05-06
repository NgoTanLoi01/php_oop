<?php

namespace App\Http\Controllers; 
use User;

class HomeController
{
    public function index()
    {
        $user = new User();
        $users = $user->getListUser();
        return $users;
    }
}
