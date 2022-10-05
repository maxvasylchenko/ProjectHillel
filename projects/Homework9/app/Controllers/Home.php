<?php
namespace App\Controllers;

class Home implements ControllerInterface
{
    public function index()
    {
       return var_dump('i am home');
    }

    public function home()
    {
       return var_dump('i am home\edit');
    }
}
?>