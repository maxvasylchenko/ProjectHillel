<?php
namespace Core;
use App\Controllers\Page404;
//use App\Controllers\Home;
//use App\Controllers\Admin;
class Router
{
    private string $exp;
    private array $options = [];

    public function __construct()
    {
        $this->exp = substr($_SERVER ["REQUEST_URI"],1);
        $this->options = include_once (__DIR__) . '/../app/settings/options.php';
    }

    public function run() : void
    {
        var_dump(array_key_exists($this->exp, $this->options));
        var_dump($this->exp);

        if (array_key_exists($this->exp, $this->options)){
            $classPath = 'App\Controllers\\' . $this->getClassName();
        } else {
         $obj = new Page404();
        }

        if (class_exists($classPath)) {
            $obj = new $classPath;
        } else {
            $obj = new Page404();
        }
        $methodName = $this->getMethodName();

        if (method_exists($obj, $methodName)) {
            $obj -> $methodName();
        } else {
            (new Page404)->index();
        }
    }

    private function getMethodName(): string
    {
        $expmethod = explode(':', $this->options[$this->exp]);
        return $expmethod [0];
    }

    private function getClassName(): string
    {
        $expmethod2 = explode(':', $this->options[$this->exp]);
        return $expmethod2 [1];
    }
}