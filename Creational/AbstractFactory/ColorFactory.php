<?php


namespace Creational\AbstractFactory;


class ColorFactory extends AbstractFactory
{
    public function getColor(string $color)
    {
        switch ($color) {
            case 'blue':
                return new Blue();
            case 'red':
                return new Red();
            case 'greed':
                return new Green();
            default:
                return null;
        }
    }

    public function getShape(string $shape)
    {
        return null;
    }
}