<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Traits;

/**
 * Trait for titled entities
 */
trait Titled {
    /**
     * Variable that represents the title for the entity
     *
     * @var string $title
     */
    protected string $title;

    /**
     * Get the title of the entity
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title ?? null;
    }

    /**
     * Set the title of the entity
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}