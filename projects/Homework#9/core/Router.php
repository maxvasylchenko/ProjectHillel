<?php

namespace Core;

use App\Controllers\Page404;

class Router
{
    private array $exp = [];

    public function run() : void
    {
        $str = substr($_SERVER ["REQUEST_URI"], 1);
        $this->exp = explode("/", $str);

        $classPath = 'App\Controllers\\' . $this->getClassName();
        if (class_exists($classPath)) {
            $obj = new $classPath;
        } else {
            $obj = new Page404();
        }
        $obj->index();
    }
    private function getClassName(): string
    {
        if (empty($this->exp[0])) {
            $ClassName = 'Home';
        } else {
            $ClassName = $this->exp[0];
        }
        return $ClassName;
    }
}
