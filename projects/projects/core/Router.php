<?php
namespace Core;
class Router
{
    public int $y = 0;
    public function getTer()
    {
        return $this->y;
    }
    public function setTer($y)
    {
       $this->y = $y;
    }
    public function run($y = null) : void
    {
        var_export ($this-> y);
    }
}