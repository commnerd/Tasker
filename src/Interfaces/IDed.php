<?php
/**
 * @author Michael J. Miller <commnerd@gmail.com>
 */
namespace Tasker\Interfaces;

/**
 * Implementation of the IDed interface
 */
interface IDed
{
    public function getID(): string;

    public function setID(string $id);
}