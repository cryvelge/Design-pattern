<?php


interface Item
{
    public function name() : string;

    public function packing() : Packing;

    public function price() : float ;
}