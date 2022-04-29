<?php

namespace app\controllers;

class HomeController extends BaseController
{
    public function index($req, $res)
    {
        return $this->view($res, 'public/home', [
            "title" => "site de bosta",
            "name" => ""
        ]);
    }
}