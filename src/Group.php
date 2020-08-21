<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker;

use Tasker\Interfaces\Tombstoned;
use Tasker\Interfaces\Described;
use Tasker\Interfaces\Grouped;
use Tasker\Interfaces\Titled;
use Tasker\Interfaces\Tagged;
use Tasker\Interfaces\Dated;
use Tasker\Interfaces\IDed;

use Iterator;

/**
 * A class for grouping tasks
 */
abstract class Group implements IDed, Titled, Described, Tagged, Dated, Tombstoned, Grouped, Iterator
{}