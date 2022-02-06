<?php

use Iterator\TaskList;
use Iterator\Task;
use Iterator\TaskListIterator;

$task_list = new TaskList();
$task_list->appendTask(new Task('タスク1'));
$task_list->appendTask(new Task('タスク2'));
$task_list->appendTask(new Task('タスク3'));
$task_list->appendTask(new Task('タスク4'));

$task_iterator = new TaskListIterator($task_list);
while ($task_iterator->hasNext()) {
  $task = $task_iterator->next();
  print_r($task->getName());
}
