<?php

use Factory\MeetingFactory;

$factory = new MeetingFactory();
$meeting_1 = $factory->create('会議1');
$meeting_2 = $factory->create('会議2');

$meeting_1->use();
$meeting_2->use();
