<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Interfaces;

use Tasker\Tag;

/**
 * Interface for tagged entities
 */
interface Tagged {
    /**
     * Get the collection of tags
     *
     * @return iterable|null
     */
    public function getTags(): ?iterable;

    /**
     * Add a tag to a tagged class
     *
     * @param Tag $tag
     * @return bool True on successful addition, else false
     */
    public function addTag(Tag $tag): bool;

    /**
     * Add a tag to a tagged class
     *
     * @param Tag $tag
     * @return bool True on successful removal, else false
     */
    public function removeTag(Tag $tag): bool;
}