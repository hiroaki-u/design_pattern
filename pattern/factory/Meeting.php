<?php

namespace Factory;

class Meeting extends Product
{
  private string $title;

  public function __construct(string $title)
  {
    $this->title = $title;
  }

  public function use(): void
  {
    print_r('作りました');
  }

  public function getTitle()
  {
    return $this->title;
  }
}
