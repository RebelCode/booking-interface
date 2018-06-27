<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something is aware of an ID of a client for a booking.
 *
 * @since [*next-version*]
 */
interface ClientIdAwareInterface
{
    /**
     * Retrieves the ID of the booking client.
     *
     * @since [*next-version*]
     *
     * @return int|string|Stringable The ID of the booking client.
     */
    public function getClientId();
}
