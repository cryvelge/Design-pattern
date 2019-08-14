<?php

namespace Creational\AbstractFactory;

abstract class AbstractFactory
{
    public abstract function getColor(string $color);
    public abstract function getShape(string $shape);
}