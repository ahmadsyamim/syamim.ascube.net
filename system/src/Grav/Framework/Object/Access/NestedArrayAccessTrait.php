<?php

/**
 * @package    Grav\Framework\Object
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Framework\Object\Access;

/**
 * Nested ArrayAccess Object Trait
 * @package Grav\Framework\Object
 */
trait NestedArrayAccessTrait
{
    /**
     * Whether or not an offset exists.
     *
     * @param mixed $offset  An offset to check for.
     * @return bool          Returns TRUE on success or FALSE on failure.
     */
    public function offsetExists($offset)
    {
        return $this->hasNestedProperty($offset);
    }

    /**
     * Returns the value at specified offset.
     *
     * @param mixed $offset  The offset to retrieve.
     * @return mixed         Can return all value types.
     */
    public function offsetGet($offset)
    {
        return $this->getNestedProperty($offset);
    }

    /**
     * Assigns a value to the specified offset.
     *
     * @param mixed $offset  The offset to assign the value to.
     * @param mixed $value   The value to set.
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->setNestedProperty($offset, $value);
    }

    /**
     * Unsets an offset.
     *
     * @param mixed $offset  The offset to unset.
     * @return void
     */
    public function offsetUnset($offset)
    {
        $this->unsetNestedProperty($offset);
    }
}
