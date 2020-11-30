<?php

namespace App\Http\Controllers;

use App\Helpers\ApiHelper; 

class HomeController extends Controller
{

    public function welcome() 
    {
        return $this->view('welcome');
    }

    public function testApi() 
    {
        echo ApiHelper::success();
    }

    public function error() 
    {
        $this->abort(404);
    }

}