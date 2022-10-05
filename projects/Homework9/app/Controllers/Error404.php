<?php
namespace App\Controllers;

class Error404 implements ControllerInterface
{
    public function index()
    {
       return var_dump('i am error404');
    }
}
?>

