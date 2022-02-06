<?php

namespace Adapter;

use DateTime;

class TimeConverter
{
  /**
   * ユニックスタイムからY-m-d H:i:sのdatetime方に変化する
   * @param int $unixtime
   * @return string
   */
  public function convertToDateTime(int $unixtime): string
  {
    $date = new DateTime();
    return $date->format('Y-m-d H:i:s', $unixtime);
  }
}
