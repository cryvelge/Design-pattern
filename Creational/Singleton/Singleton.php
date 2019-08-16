<?php


class Singleton
{
    public static $instance; //静态属性只初始化一次

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance instanceof self) { //如果已经实例化就直接返回
            return self::$instance;
        }
        return new self();
    }

    public function showMessage()
    {
        echo 'hello world';
    }
}