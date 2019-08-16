<?php


class Bottle implements Packing
{
    public function pack(): string
    {
        return 'bottle';
    }
}