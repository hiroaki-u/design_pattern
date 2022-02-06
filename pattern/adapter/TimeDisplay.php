<?php

namespace Adapter;

abstract class TimeDisplay
{
  public abstract function showTime(int $unixtime): string;
}
