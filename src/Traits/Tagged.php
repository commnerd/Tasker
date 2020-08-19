<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Traits;

use Tasker\Tag;

/**
 * Interface for tagged entities
 */
trait Tagged {

    /**
     * Variable that represents the applicable tags for the entity
     *
     * @var array $tags
     */
    protected $tags = [];

    /**
     * Get the tags
     *
     * @return array|null
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * Add a tag to a tagged class
     *
     * @param Tag $tag
     * @return bool True on successful addition, else false
     */
    public function addTag(Tag $tag): bool
    {
        $index = $this->getTagIndex($tag);

        if($index >= 0) {
            return false;
        }

        $this->tags[] = $tag;
        return true;
    }

    /**
     * Add a tag to a tagged class
     *
     * @param Tag $tag
     * @return bool True on successful removal, else false
     */
    public function removeTag(Tag $tag): bool
    {
        $index = $this->getTagIndex($tag);

        if($index < 0) {
            return false;
        }

        $this->tags = array_splice($this->tags, $index, 1);

        return true;
    }

    /**
     * Mimic array_search, but for list of tags
     *
     * @param Tag $tag Tag to search for in array
     * @return integer The index of the tag, -1 if not found
     */
    private function getTagIndex(Tag $tag): int
    {
        foreach($this->tags as $index => $registeredTag) {
            if($tag->getTitle() === $registeredTag->getTitle()) {
                return $index;
            }
        }
        return -1;
    }
}