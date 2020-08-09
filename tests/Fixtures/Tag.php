<?php

namespace Tests\Fixtures;

use Tasker\Tag as AbstractTag;

use Tasker\Traits\Titled;
use Tasker\Traits\Described;
use Tasker\Traits\Tagged;
use Tasker\Traits\Dated;
use Tasker\Traits\Tombstoned;


class Tag extends AbstractTag
{
    use Titled, Described, Tagged, Dated, Tombstoned;
}