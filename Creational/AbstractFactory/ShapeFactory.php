<?php

namespace Creational\AbstractFactory;

class ShapeFactory extends AbstractFactory
{
    public function getShape(string $shape)
    {
        switch ($shape) {
            case 'circle':
                return new Circle();
                break;
            case 'rectangle':
                return new Rectangle();
                break;
            case 'square':
                return new Square();
            default:
                return null;
        }
    }

    public function getColor(string $color)
    {
        return null;
    }
}