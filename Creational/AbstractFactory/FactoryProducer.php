<?php


namespace Creational\AbstractFactory;


class FactoryProducer
{
    public static function getFactory(string $choice) : AbstractFactory
    {
        switch ($choice) {
            case 'shape':
                return new ShapeFactory();
            case 'color':
                return new ColorFactory();
            default:
                return null;
        }
    }
}