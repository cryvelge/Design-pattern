<?php


class VegBurger extends Burger
{
    public function name(): string
    {
        return 'Veg Burger';
    }

    public function price(): float
    {
        return 25.5;
    }
}