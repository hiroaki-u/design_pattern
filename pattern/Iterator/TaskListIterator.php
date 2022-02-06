<?php

namespace Iterator;

use Exception;

class TaskListIterator implements Iterator
{

  private TaskList $tasklist;
  private int $index;

  public function __construct(TaskList $task_list)
  {
    $this->task_list = $task_list;
    $this->index = 0;
  }

  /**
   * 次のタスクがあればtrueを返す。
   */
  public function hasNext(): bool
  {
    if ($this->index < $this->task_list->getLength()) {
      return true;
    } else {
      return false;
    }
  }

  /**
   * @brief 次のタスクがあれば、次のタスクを返す。
   * @return Iterator
   */
  public function next(): Iteratee
  {
    if (!$this->hasNext()) {
      throw new Exception();
    }
    $book = $this->task_list->getBookAt($this->index);
    $this->index++;
    return $book;
  }
}
