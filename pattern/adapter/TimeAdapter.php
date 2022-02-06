<?php

namespace Adapter;

class TimeAdapter extends TimeDisplay
{
  private TimeConverter $converter;

  public function __construct()
  {
    $this->converter = new TimeConverter();
  }

  public function showTime(int $unixtime): string
  {
    return $this->converter->convertToDateTime($unixtime);
  }
}
