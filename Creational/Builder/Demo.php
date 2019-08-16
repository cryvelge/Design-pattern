<?php


class Demo
{
    public static function main()
    {
        $mealBuilder = new MailBuilder();
        $vegMeal = $mealBuilder->prepareVegMeal();
        $vegMeal->showItems();
        $vegMeal->getCost();
    }
}