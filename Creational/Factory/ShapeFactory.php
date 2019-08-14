<?php


class ShapeFactory
{
    public function getShape(string $shapetype) : ShapeInterface
    {
        switch ($shapetype) {
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
}