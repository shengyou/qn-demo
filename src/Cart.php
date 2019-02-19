<?php

namespace App;

class Cart
{
    private $items = [];

    public function add(Product $product)
    {
        array_push($this->items, $product);
    }

    public function amount()
    {
        return count($this->items);
    }

    public function totalPrice()
    {
        $totalPrice = 0;
        foreach ($this->items as $product) {
            /* @var \App\Product $product */
            $totalPrice += $product->getPrice();
        }

        return $totalPrice;
    }
}
