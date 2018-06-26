<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of a booking status.
 *
 * @since [*next-version*]
 */
interface StatusAwareInterface
{
    /**
     * Retrieves the booking status for this instance.
     *
     * @since [*next-version*]
     *
     * @return int|string|Stringable The status.
     */
    public function getStatus();
}
