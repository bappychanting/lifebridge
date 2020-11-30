<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 

class DashboardController extends Controller
{

    public function __construct() {
        $this->guard('CheckAuth');
    }

    public function dashboard() 
    {
        return $this->view('admin/dashboard');
    }

}