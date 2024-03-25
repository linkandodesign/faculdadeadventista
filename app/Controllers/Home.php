<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dadosHeader['title'] = "Home - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/home');
        echo view('/templates/footer');
    }
}
