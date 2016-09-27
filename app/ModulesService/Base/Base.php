<?php
namespace App\ModulesService\Base;
/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/9/27
 * Time: 15:05
 */
class Base{
    /*store created instance*/
    private static $arrInstance;

    public function __construct()
    {
    }

    /**
     * create a instance,is single instance
     * @return mixed
     */
    public static function getInstance(){
            $className=get_called_class();
            if(!isset(self::$arrInstance[$className]))
            {
               self::$arrInstance[$className]=new $className;
            }
             return self::$arrInstance[$className];
    }
}