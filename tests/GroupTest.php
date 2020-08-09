<?php
namespace Tests;

use Tasker\Group as BaseGroup;
use Tests\Fixtures\Group;

class GroupTest extends TestCase
{
    public function testTask()
    {
        $group = new Group();

        $this->assertTrue($group instanceof BaseGroup);

    }
}