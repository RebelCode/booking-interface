<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of, and can provide, a transition code.
 *
 * @since [*next-version*]
 */
interface TransitionAwareInterface
{
    /**
     * Retrieves the transition code associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The transition code.
     */
    public function getTransition();
}
