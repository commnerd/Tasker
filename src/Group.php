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
use Tasker\Task;
use Iterator;

/**
 * A class for grouping tasks
 */
abstract class Group implements Titled, Described, Tagged, Dated, Tombstoned, Grouped, Iterator
{}