<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    public function postUserRegistration(Request $request)
    {
        //Retrieve the name input field
        $name=$request->input('name');
        echo 'name'.$name;
        echo '<br>';

        //lấy tên người dùng
        $username=$request ->username;
        echo 'Username: '.$username;
        echo '<br>';

        //Lấy mật khẩu người dùng
        $password=$request->password;
        echo 'Password: '.$password;
    }
}
