<?php

abstract class Burger implements Item
{
    public function packing(): Packing
    {
        return new Wrapper();
    }


    public abstract function price(): float;
}