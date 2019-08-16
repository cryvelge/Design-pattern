<?php


class Pepsi extends ColdDrink
{
    public function name(): string
    {
        return 'pepsi';
    }

    public function price(): float
    {
        return 9.9;
    }
}