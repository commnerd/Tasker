<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Interfaces;

/**
 * Interface for titled entities
 */
interface Titled {
    /**
     * Get the title of the task
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Set the title of the task
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void;
}