<?php

namespace Creational\AbstractFactory;

class Rectangle implements Shape
{
    public function draw()
    {
        return 'Inside Rectangle::draw() method.';
    }

}