<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Traits;

/**
 * Interface for dealing with description-based entities
 */
trait Described
{
    /**
     * Variable that represents the description of the implementing class
     *
     * @var string $description
     */
    protected string $description;

    /**
     * Get the description of the task
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set the description of the task
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}