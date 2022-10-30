<?php
namespace App\Controllers;

class Home implements ControllerInterface1
{
    public function index()
    {
      var_dump('i am home');
    }
    public function edit()
    {
        var_dump('i am home\edit');
    }
}