<?php
namespace Tests;

use Tasker\Tag as BaseTag;
use Tests\Fixtures\Tag;

class TestTag extends TestCase
{
    public function testTag()
    {
        $tag = new Tag();

        $this->assertTrue($tag instanceof BaseTag);
    }
}