<?php

namespace app\traits;

use Exception;
use Slim\Views\Twig;

trait Template
{
    protected function view($response, $route, array $params)
    {
        return $this->twigInstance()->render($response, $route.".twig", $params);
    }

    private function twigInstance()
    {
        try{
            return Twig::create(__DIR__ . "/../views/");
        }catch(Exception $e){
            var_dump($e->getMessage());
        }
    }
}