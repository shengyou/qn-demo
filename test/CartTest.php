<?php

namespace App\Tests;

use App\Cart;
use App\Product;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testShouldReturn0WhenConstruct()
    {
        $cart = new Cart();
        $this->assertEquals(0, $cart->amount());
    }

    public function testAdd()
    {
        // Arrange
        $product = new Product();
        $cart = new Cart();

        // Act
        $cart->add($product);

        // Assert
        $this->assertEquals(1, $cart->amount());
    }

    public function testTotalPrice()
    {
        // Arrange
        $product1 = new Product('SKU001', 'Apple', 100);
        $product2 = new Product('SKU002', 'Banana', 200);
        $product3 = new Product('SKU003', 'Orange', 300);
        $cart = new Cart();

        // Act
        $cart->add($product1);
        $cart->add($product2);
        $cart->add($product3);

        // Assert
        $this->assertEquals(100+200+300, $cart->totalPrice());
    }
}
