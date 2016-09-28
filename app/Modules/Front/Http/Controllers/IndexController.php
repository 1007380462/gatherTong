<?php

namespace App\Modules\Front\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\ModulesService\User\UserAdd;

class IndexController extends Controller
{
    public function __construct()
    {
    }

    public function index(){
       $classInstance=UserAdd::getInstance();
       $content=$classInstance->add();
        \Log::error('error');
          \Log::warning('warning');


     //   \Log::info('info');
      //  \Log::debug('debug');
        return $content;
    }
}
