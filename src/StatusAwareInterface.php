<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of a booking status.
 *
 * @since 0.2
 */
interface StatusAwareInterface
{
    /**
     * Retrieves the booking status for this instance.
     *
     * @since 0.2
     *
     * @return int|string|Stringable The status.
     */
    public function getStatus();
}
