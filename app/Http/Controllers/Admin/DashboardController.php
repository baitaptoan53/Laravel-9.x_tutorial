<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        //echo 'khoi dong dashboard';
        //Su dung session check login
    }
    public function index()
    {

        return 'dashboard weloconme';
    }
}
