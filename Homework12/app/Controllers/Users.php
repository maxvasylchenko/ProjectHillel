<?php
namespace App\Controllers;
use App\Models\User;
use Core\View;
class Users implements ControllerInterface1
{
    public function index()
    {
        $obj = new User();
        $path = 'view_1';
        $data['users'] = $obj->getAll();
        View::generate($path, $data);
        //var_dump ($obj->getAll());
    }
    public function edit()
    {
        //var_dump ($_POST);
        $result = array_filter($_POST);
        var_dump($result);
        if (!empty($result)){
            $obj = new User();
            $obj->createUser($result);
        }
        $path = 'User' . DIRECTORY_SEPARATOR . 'Insert';
        View::generate($path);
    }
}
