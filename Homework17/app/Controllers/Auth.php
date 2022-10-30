<?php

namespace App\Controllers;
use App\Models\User;
use Core\View;
class Auth
{
public function login ()
{
    $data = array_filter($_POST);
    var_dump ($data);
    if (!empty($data)){
        $obj = new User();
        $result = $obj->auth($data['email'], $data['password']);
        var_dump($result);
    }
    View::generate('auth/login', $data);
}
public function register()
{
    $data = array_filter($_POST);
    if (!empty($data)){
        $obj = new User();
        $obj->createUser($data);
    }
    View::generate('auth/register', $data);
}
}