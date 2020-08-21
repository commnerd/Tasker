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

/**
 * The core data type for this library.
 * Everything will revolve around tasks and task organization.
 */
abstract class Task implements IDed, Titled, Described, Tagged, Dated, Tombstoned, Grouped {}