<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker;

use Tasker\Interfaces\Grouped;
use Tasker\Interfaces\Titled;

/**
 * Interface for tag entity
 */
abstract class Tag implements Titled, Grouped
{}