<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Interfaces;

use DateTime;

/**
 * Interface for maintaining tombstone
 */
interface Tombstoned {
    /**
     * Get the task deleted DateTime for tombstoning if necessary
     *
     * @return DateTime
     */
    public function getDeletedAt(): ?DateTime;

    /**
     * Set the task deleted DateTime
     *
     * @param DateTime $datetime
     * @return void
     */
    public function setDeletedAt(DateTime $datetime): void;
}