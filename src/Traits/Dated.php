<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Traits;

use DateTime;

/**
 * Interface for dealing with create and updated dates
 */
trait Dated
{
    /**
     * Variable that represents the creation time and date of the implementing class
     *
     * @var DateTime $createdAt
     */
    protected DateTime $createdAt;

    /**
     * Variable that represents the last update time and date of the implementing class
     *
     * @var DateTime $updatedAt
     */
    protected DateTime $updatedAt;

    /**
     * Get the task creation DateTime
     *
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt ?? new DateTime('now');
    }

    /**
     * Set the task creation DateTime
     *
     * @param DateTime $datetime
     * @return void
     */
    public function setCreatedAt(DateTime $dateTime): void
    {
        $this->createdAt = $dateTime;
    }

    /**
     * Get the task updated DateTime
     *
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt ?? new DateTime('now');
    }

    /**
     * Set the task updated DateTime
     *
     * @param DateTime $datetime
     * @return void
     */
    public function setUpdatedAt(DateTime $dateTime): void
    {
        $this->updatedAt = $dateTime;
    }
}