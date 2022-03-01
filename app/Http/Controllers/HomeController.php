<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];

    public function index()
    {
        $this->data['welcome'] = 'Welcome to my website';
        $this->data['number']=10;
        $this->data['name']='Nguyen Xuan Ngoc';
        return view('home', $this->data);
    }
}
