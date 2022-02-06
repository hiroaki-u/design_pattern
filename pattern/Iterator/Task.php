<?php

namespace Iterator;

class Task
{
  private $name;

  public function __construct(String $name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}
