<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that can transition to achieve to a new status.
 *
 * @since [*next-version*]
 */
interface TransitionCapableInterface
{
    /**
     * Applies a transitions on this instance.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $transition The transition code.
     * @param array             $data
     *
     * @return TransitionCapableInterface The instance with the completed transition - may not be the same instance.
     */
    public function transition($transition, $data = array());
}
