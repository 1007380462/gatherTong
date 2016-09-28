<?php
/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/9/28
 * Time: 10:19
 */
/*customize log file*/
$path=array(
    'ERROR'=>__DIR__.'/storage/logs/error.log',
    'WARNING'=>__DIR__.'/storage/logs/error.log',
    'CRITICAL'=>__DIR__.'/storage/logs/error.log',
    'INFO'=>__DIR__.'/storage/logs/error.log',
    'NOTICE'=>__DIR__.'/storage/logs/error.log',
    'ALERT'=>__DIR__.'/storage/logs/error.log',
    'EMERGENCY'=>__DIR__.'/storage/logs/error.log',
    'DEBUG'=>__DIR__.'/storage/logs/error.log',
);
$app->configureMonologUsing(function($monolog,$path){
    $monolog->pushHandler(
        new \Monolog\Handler\StreamHandler($path['ERROR']),
        \Monolog\Logger::ERROR
    );
    $monolog->pushHandler(
        new \Monolog\Handler\StreamHandler($path['WARNING']),
        \Monolog\Logger::WARNING
    );
    $monolog->pushHandler(
        new \Monolog\Handler\StreamHandler($path['CRITICAL']),
        \Monolog\Logger::CRITICAL
    );
    $monolog->pushHandler(
        new \Monolog\Handler\StreamHandler($path['NOTICE']),
        \Monolog\Logger::NOTICE
    );
    $monolog->pushHandler(
        new \Monolog\Handler\StreamHandler('path'),
        \Monolog\Logger::INFO
    );
    $monolog->pushHandler(
        new \Monolog\Handler\StreamHandler('path'),
        \Monolog\Logger::ALERT
    );
    $monolog->pushHandler(
        new \Monolog\Handler\StreamHandler('path'),
        \Monolog\Logger::EMERGENCY
    );
    $monolog->pushHandler(
        new \Monolog\Handler\StreamHandler('path'),
        \Monolog\Logger::DEBUG
    );
});