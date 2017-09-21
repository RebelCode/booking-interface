<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;
use Psr\Container\ContainerInterface as Container;

/**
 * Something that is aware of, and can provide, information about a transition.
 *
 * @since [*next-version*]
 */
interface TransitionAwareInterface
{
    /**
     * Retrieves the key of the transition associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The transition code.
     */
    public function getTransitionKey();

    /**
     * Retrieves the data of the transition associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return array|Container The transition data.
     */
    public function getTransitionData();
}
