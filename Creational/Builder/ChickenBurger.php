<?php


class ChickenBurger extends Burger
{
    public function price(): float
    {
        return 15.5;
    }

    public function name(): string
    {
        return 'Chicken Burger';
    }
}