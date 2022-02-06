<?php

namespace Factory;

class MeetingFactory extends Factory
{
  protected function createProduct(string $title): Meeting
  {
    return new Meeting($title);
  }

  protected function insertProduct(Product $product): void
  {
    // 本来は保存の処理
    // $this->create(['title' => $product->getTitle()]);
    print_r($product->getTitle() . 'を登録しました。');
  }
}
