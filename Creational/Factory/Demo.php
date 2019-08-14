<?php


class Demo
{
    /**
     * @param string $type
     */
    public function main(string $type)
    {
        $factory = new ShapeFactory();
        $shape = $factory->getShape($type);
        return $shape->draw();

    }
}