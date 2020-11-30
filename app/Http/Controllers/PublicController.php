<?php

namespace App\Http\Controllers;

use App\Helpers\ApiHelper; 

class PublicController extends Controller
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