<?php

namespace App\Modules\Front\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    //
    public function __construct()
    {
    }
    public function index(){
        return "success";
        ///function one
        $response=new Response();
        //$response=new Response();
        return $response->setContent("success")->send();
        ///function two
        //return response()->view('adminlte::home')->send();
        return view('adminlte::home');
    }
}
