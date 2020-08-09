<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Interfaces;

/**
 * Interface for dealing with description-based entities
 */
interface Described {
    /**
     * Get the description of the task
     *
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * Set the description of the task
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description): void;
}