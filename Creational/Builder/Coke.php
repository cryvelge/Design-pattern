<?php


class Coke extends ColdDrink
{
    public function name(): string
    {
        return 'coke';
    }

    public function price(): float
    {
        return 8.8;
    }
}