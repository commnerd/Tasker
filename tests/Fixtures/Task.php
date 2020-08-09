<?php

namespace Tests\Fixtures;

use Tasker\Task as AbstractTask;

use Tasker\Traits\Tombstoned;
use Tasker\Traits\Described;
use Tasker\Traits\Grouped;
use Tasker\Traits\Titled;
use Tasker\Traits\Tagged;
use Tasker\Traits\Dated;

class Task extends AbstractTask
{
    use Titled, Described, Tagged, Dated, Tombstoned, Grouped;
}