<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Interfaces;

use Tasker\Group;

/**
 * Interface for grouped entities
 */
interface Grouped {
    /**
     * Get the parent group of the entity
     *
     * @return Group
     */
    public function getParentGroup(): Group;

    /**
     * Set the parent group of entity
     *
     * @param Group $group
     * @return void
     */
    public function setParentGroup(Group $group): void;
}