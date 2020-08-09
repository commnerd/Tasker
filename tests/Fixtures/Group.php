<?php

namespace Tests\Fixtures;

use Tasker\Group as AbstractGroup;

use Tasker\Traits\Tombstoned;
use Tasker\Traits\Described;
use Tasker\Traits\Titled;
use Tasker\Traits\Tagged;
use Tasker\Traits\Dated;

use Tasker\Group as BaseGroup;
use Tasker\Task;

class Group extends AbstractGroup
{
    use Titled, Described, Tagged, Dated, Tombstoned;

    protected array $tasks = [];
    protected int $iteratorIndex = 0;

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

    /**
     * Get the parent group of the entity
     *
     * @return BaseGroup
     */
    public function getParentGroup() : BaseGroup
    {
        return $this->parentGroup;
    }

    /**
     * Set the parent group of entity
     *
     * @param BaseGroup $group
     * @return void
     */
    public function setParentGroup(BaseGroup $group): void
    {
        $this->parentGroup = $group;
    }

    /**
     * Get current task to support Iterator interface
     *
     * @return Task
     */
    public function current() : Task {
        $this->tasks[$this->iteratorIndex];
    }

    /**
     * Get current key to support Iterator interface
     *
     * @return int
     */
    public function key () : int {
        return $this->iteratorIndex;
    }

    /**
     * Increment task index to support Iterator interface
     *
     * @return Task
     */
    public function next () : void
    {
        $this->iteratorIndex++;
    }

    /**
     * Decrement task index to support Iterator interface
     *
     * @return Task
     */
    public function rewind() : void
    {
        $this->iteratorIndex--;
    }

    /**
     * Return true if current task is valid, else false to support Iterator interface
     *
     * @return boolean
     */
    public function valid() : bool
    {
        return !!$this->tasks[$this->iteratorIndex];
    }
}