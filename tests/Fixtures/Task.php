<?php

namespace Tests\Fixtures;

use Tasker\Task as AbstractTask;

use Tasker\Traits\Titled;
use Tasker\Traits\Described;
use Tasker\Traits\Tagged;
use Tasker\Traits\Dated;
use Tasker\Traits\Tombstoned;


class Task extends AbstractTask
{
    use Titled, Described, Tagged, Dated, Tombstoned;
}