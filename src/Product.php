<?php

namespace App;

class Product
{
    private $sku;
    private $name;
    private $price;

    /**
     * Product constructor.
     * @param $sku
     * @param $name
     * @param $price
     */
    public function __construct($sku = null, $name = null, $price = null)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}
