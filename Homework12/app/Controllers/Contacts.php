<?php
namespace App\Controllers;
use App\Models\Contact;
use Core\View;
class Contacts implements ControllerInterface1
{
    public function index()
    {
        $obj = new Contact();
        $path = 'view_1';
        $data['contacts'] = $obj->getAll();
        View::generate($path, $data);
        //var_dump ($obj->getAll());
    }
}
