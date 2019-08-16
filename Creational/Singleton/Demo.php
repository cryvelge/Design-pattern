<?php


class Demo
{
    public static function main()
    {
        $object = Singleton::getInstance();
        $object->showMessage();
    }
}