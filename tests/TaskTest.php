<?php
namespace Tests;

use Tasker\Task as BaseTask;
use Tests\Fixtures\Task;

class TestTask extends TestCase
{
    public function testTask()
    {
        $task = new Task();

        $this->assertTrue($task instanceof BaseTask);
    }
}