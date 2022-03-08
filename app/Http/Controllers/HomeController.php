<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data=[];
    public function index(){
         // $this->data['welcome'] = 'Welcome to my website';
        // $this->data['number']=10;
        // $this->data['name']='Nguyen Xuan Ngoc';
        $this->data['title']='Trang chủ';
        return view('clients.home',$this->data);
    }
    public function products(){
        $this->data['title']='Sản phẩm';
        return view('clients.products',$this->data);
    }
    }
?>
