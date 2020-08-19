<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Traits;

use Tasker\Group;

/**
 * Trait for grouped entities
 */
trait Grouped {
    /**
     * Variable that represents the parent group for the entity
     *
     * @var Group $parentGroup
     */
    protected Group $parentGroup;

    /**
     * Get the parent group of the entity
     *
     * @return Group
     */
    public function getParentGroup(): ?Group
    {
        return $this->parentGroup ?? null;
    }

    /**
     * Set the parent group of the entity
     *
     * @param Group $parentGroup
     * @return void
     */
    public function setParentGroup(Group $parentGroup): void
    {
        $this->parentGroup = $parentGroup;
    }
}