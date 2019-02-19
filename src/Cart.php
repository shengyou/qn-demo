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
}
