<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        // parent::__construct();
        // helper(['url','form']);
    }
    public function index()
    {
        // echo current_url();
        return view('welcome_message');
    }

    public function registeruser(){
        return 'hello registeruser';
        // return view('registeruser');
    }
}
