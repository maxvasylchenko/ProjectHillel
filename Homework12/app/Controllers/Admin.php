<?php
namespace App\Controllers;

class Admin implements ControllerInterface
{
    public function index()
    {
      var_dump('i am admin');
    }
    public function edit()
    {
        var_dump('i am admin\edit');
    }
}