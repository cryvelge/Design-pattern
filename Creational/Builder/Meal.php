<?php


class Meal
{
    public $item = [];

    public function addItem(Item $item)
    {
        $this->item[] = $item;
    }

    public function getCost()
    {
        $cost = 0.0;
        foreach ($this->item as $value) {
            $cost += $value->price;
        }
        return $cost;
    }

    public function showItems()
    {
        /**
         * @var Item $item
         */
        foreach ($this->item as $item)
        {
            echo 'Item:' . $item->name() . '<br>';
            echo 'packing:' . $item->packing()->pack() . '<br>';
            echo 'price:' . $item->price() . '<br>';
        }
    }

}