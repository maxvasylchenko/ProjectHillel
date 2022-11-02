<?php

namespace App\Controllers;
use App\Models\User;
use Core\View;
class Auth implements ControllerInterface1
{
    public function index ()
    {
        $obj = new User;
        $path = 'viewUsers';
        $date['people'] = $obj->getAll();
        View::generate($path, $date);
    }
    public function login ()
{
    $data = array_filter($_POST);
    if (!empty($data)){
        $obj = new User();
        $result = $obj->auth($data['email'], $data['password']);
        var_dump($result);
    }
    //View::generate('auth/login', $data);
    $path = 'auth' . DIRECTORY_SEPARATOR . 'insertLogin';
    View::generate($path);
}
    public function register()
{
    $data = array_filter($_POST);
    if (!empty($data)){
        $obj = new User();
        $obj->createUser($data);
    }
    //View::generate('auth/register', $data);
    $path = 'auth' . DIRECTORY_SEPARATOR . 'insertRegister';
    View::generate($path);
}
}