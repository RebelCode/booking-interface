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
    /**
     * Retrieves the transition data related to this exception..
     *
     * @since [*next-version*]
     *
     * @return array The transition data.
     */
    public function getTransitionData();
}
