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

}
