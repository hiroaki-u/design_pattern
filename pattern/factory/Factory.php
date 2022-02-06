<?php

namespace Factory;

abstract class Factory
{
  public function create(string $title)
  {
    $product = $this->createProduct($title);
    $this->insertProduct($product);
    return $product;
  }

  protected abstract function createProduct(string $title): Product;

  protected abstract function insertProduct(Product $product): void;
}
