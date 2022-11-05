<?php
namespace Core;
use App\Controllers\Page404;
//use App\Controllers\Users;
//use App\Controllers\Contacts;
//use App\Controllers\Posts;
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
            $classPath = 'App\Controllers\\'. $this->getClassName();
        } else {
            $classPath = new Page404();
        }

        if (class_exists($classPath)) {
            $obj = new $classPath;
        } else {
            $obj = new Page404();
        }
        $methodName = $this->getMethodName();

        if (method_exists($obj, $methodName)) {
            $obj->$methodName();
        } else {
            (new Page404)->index();
        }
    }

    private function getMethodName(): string
    {
        $exp = explode(':', $this->options[$this->exp]);
        return $exp [0];
    }

    private function getClassName(): string
    {
        $exp = explode(':', $this->options[$this->exp]);
        return $exp [1];
    }
}