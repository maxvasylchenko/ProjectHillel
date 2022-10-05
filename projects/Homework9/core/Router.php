<?php
namespace Core;

//App\Controllers\Admin
//App\Controllers\Home
use App\Controllers\Error404;


class Router
{
    private array $exp;
    public function __construct()
    {
        $str = substr($_SERVER ["REQUEST_URI"],1);
        $this->exp = explode("/", $str);
    }

    public function run() : void
    {
        $classPath = 'App\Controllers\\' . $this->getClassName();
        if (class_exists($classPath)) {
            $obj = new $classPath;
        } else {
            $obj = new Error404();
        }
        $methodName = $this->getMethodName();

        if (method_exists($obj, $methodName)) {
            $obj->$methodName();
        } else {
            (new Error404)->index();
        }
    }

    private function getMethodName(): string
    {
        if (empty($this->exp[1])) {
            $methodName = 'index';
        } else {
            $methodName = $this->exp[1];
        }
        return $methodName;
    }

    private function getClassName(): string
    {
        if (empty($this->exp[0])) {
            $className = 'Home';
        } else {
            $className = $this->exp[0];
        }
        return ucfirst($className);
    }
}