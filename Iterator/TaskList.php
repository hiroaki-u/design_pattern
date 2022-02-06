<?php

namespace Iterator;

class TaskList implements Iteratee
{
  private array $task_list;
  private int $last = 0;

  public function __construct()
  {
    $task_list = [];
  }
  public function getTaskAt(int $index): Task
  {
    return $this->task_list[$index];
  }

  public function appendTask(Task $task): void
  {
    $this->task_list[$this->last] = $task;
    $this->last++;
  }

  public function getLength(): int
  {
    return $this->last;
  }

  public function iterator(): Iterator
  {
    return new TaskListIterator($this);
  }
}
