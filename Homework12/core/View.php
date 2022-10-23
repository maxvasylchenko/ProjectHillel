<?php

namespace Core;

class View
{
    public static function generate (string $path, array $data =[])
    {
        extract($data);
        $filePath = 'public/view' . $path . '.php';

        if(file_exists($filePath))
        {
            include $filePath;
        } else {
            throw new \Exception ('Templates ' . $filePath . ' absent');
        }
    }
//ClassName::MethodName()
}