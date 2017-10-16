<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;
use Dhii\Time\PeriodInterface;

/**
 * Something that represents a booking.
 *
 * A booking is a period of time during which something is reserved, like a service or resource.
 *
 * Through awareness of a "status", a booking can provide a contextual indicator about the current stage of its
 * lifetime in a system.
 *
 * @since [*next-version*]
 */
interface BookingInterface extends PeriodInterface
{
    /**
     * Retrieves the booking status for this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The status.
     */
    public function getStatus();
}
