<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;
use RebelCode\Bookings\Exception\BookingExceptionInterface;
use RebelCode\Bookings\Exception\CouldNotTransitionExceptionInterface;

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
     *
     * @throws CouldNotTransitionExceptionInterface If the transition failed or was aborted.
     * @throws BookingExceptionInterface            If an error was encountered during transition.
     *
     * @return TransitionCapableInterface The instance with the completed transition - may not be the same instance.
     */
    public function transition($transition);
}
