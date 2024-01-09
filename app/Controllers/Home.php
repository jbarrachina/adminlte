<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    
    public function adminlte(){
        $data['title'] = 'Esto es un ejemplo';
        return view('prueba/ejemplo', $data);
    }
}
