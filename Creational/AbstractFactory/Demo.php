<?php


namespace Creational\AbstractFactory;


class Demo
{
    public function main()
    {
        $shapeFactory = FactoryProducer::getFactory('shape');
        $circle = $shapeFactory->getShape('circle');
        $circle->draw();
    }
}