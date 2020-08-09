<?php

namespace Tests\Fixtures;

use Tasker\Tag as AbstractTag;

use Tasker\Traits\Tombstoned;
use Tasker\Traits\Described;
use Tasker\Traits\Grouped;
use Tasker\Traits\Titled;
use Tasker\Traits\Tagged;
use Tasker\Traits\Dated;


class Tag extends AbstractTag
{
    use Titled, Described, Tagged, Dated, Tombstoned, Grouped;
}