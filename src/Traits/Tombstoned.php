<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Traits;

use DateTime;

/**
 * Trait for tombstone implementation
 */
trait Tombstoned {
    /**
     * Variable that represents the delete datetime of the entity
     *
     * @var string $title
     */
    protected DateTime $deletedAt;

    /**
     * Get the task deleted DateTime for tombstoning if necessary
     *
     * @return DateTime
     */
    public function getDeletedAt(): ?DateTime
    {
        return $this->deletedAt ?? null;
    }

    /**
     * Set the task deleted DateTime
     *
     * @param DateTime $dateTime
     * @return void
     */
    public function setDeletedAt(DateTime $dateTime): void
    {
        $this->deletedAt = $dateTime;
    }
}