<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Interfaces;

use DateTime;

/**
 * Interface for dealing with create and updated dates
 */
interface Dated {
    /**
     * Get the task creation DateTime
     *
     * @return DateTime
     */
    public function getCreatedAt(): DateTime;

    /**
     * Set the task creation DateTime
     *
     * @param DateTime $datetime
     * @return void
     */
    public function setCreatedAt(DateTime $datetime): void;

    /**
     * Get the task updated DateTime
     *
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime;

    /**
     * Set the task updated DateTime
     *
     * @param DateTime $datetime
     * @return void
     */
    public function setUpdatedAt(DateTime $datetime): void;
}