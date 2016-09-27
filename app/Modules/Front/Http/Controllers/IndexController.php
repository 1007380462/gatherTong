<?php

namespace App\Modules\Front\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function __construct()
    {
    }
    public function index(){
        return view('adminlte::home');
    }
}
