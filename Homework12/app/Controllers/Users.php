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
}
