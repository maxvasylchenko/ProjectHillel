<?php
namespace App\Controllers;

class Admin implements ControllerInterface
{
    public function index()
    {
       return var_dump('i am admin');
    }
    public function admin()
    {
        return var_dump('i am admin\edit');
    }
}
?>