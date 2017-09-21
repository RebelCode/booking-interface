<?php

namespace RebelCode\Bookings\Exception;

use RebelCode\Bookings\TransitionAwareInterface;

/**
 * An exception raised when a booking failed to transition.
 *
 * @since [*next-version*]
 */
interface CouldNotTransitionExceptionInterface extends
    BookingExceptionInterface,
    TransitionAwareInterface
{
}
