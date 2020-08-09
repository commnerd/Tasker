<?php

namespace Tests\Fixtures;

use Tasker\Group as AbstractGroup;

use Tasker\Traits\Tombstoned;
use Tasker\Traits\Described;
use Tasker\Traits\Titled;
use Tasker\Traits\Tagged;
use Tasker\Traits\Dated;
use Tasker\Task;

class Group extends AbstractGroup
{
    use Titled, Described, Tagged, Dated, Tombstoned;

    protected $tasks = [];

    /**
     * Get the array of tasks
     *
     * @return string|null
     */
    public function getTasks(): ?array
    {
        return $this->tasks;
    }

    /**
     * Add a task
     *
     * @param Task $task
     * @return bool True if task was successfully added, else false
     */
    public function addTask(Task $task): bool
    {
        $this->tasks[] = $task;
        return true;
    }

    /**
     * Rmove a task
     *
     * @param Task $task
     * @return bool True if task was successfully removed, else false
     */
    public function removeTask(Task $task): bool
    {
        $index = array_search($task, $this->tasks);

        if($index < 0) {
            return false;
        }

        $this->tasks = array_splice($this->tasks, $index, 1);

        return true;
    }
}