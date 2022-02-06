<?php

use Adapter\TimeDisplay;

$unixtime = time();
$display = new TimeDisplay();
$display->showTime($unixtime);
