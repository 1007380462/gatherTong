<?php
namespace App\Modules\Back\Http\Controllers;
use App\Http\Controllers;
class IndexController extends Controllers\Controller{

   public function __construct()
   {
   }
    public function index(){
        //return view('adminlte::home');
        //return view('adminlte::layouts.app');
       // return view('adminlte::layouts.partials.footer');
       // return view('adminlte::layouts.partials.mainheader');
       // $front=new \App\Modules\Front\Http\Controllers\IndexController;
       //$result= $front->index();
     //   $result='sdsd';
       // var_dump($result);

       return view('adminlte::layouts.landing');
    }
}