<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 返回字符串
     * @param $context
     */
    public function responseString($content){
        if(is_array($content))
        {
            $content=json_encode($content);
        }

        if(is_object($content))
        {
            $content=json_encode($content);
        }

        $response=new Response();
        $response->setContent($content);
        return true;
    }

    /**
     * 返回视图
     * @param $viewNamw
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function responseView($viewNamw){
        if(!empty($viewNamw))
        {
            if(is_string($viewNamw))
            {
                response()->view($viewNamw)->send();
            }
        }
        return false;
    }
}
