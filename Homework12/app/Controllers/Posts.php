<?php
namespace App\Controllers;
use App\Models\Post;
use Core\View;
class Posts implements ControllerInterface1
{
    public function index()
    {
        $obj = new Post();
        $path = 'view_1';
        $data['posts'] = $obj->getAll();
        View::generate($path, $data);
        //var_dump ($obj->getAll());
    }
}