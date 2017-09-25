<?php

namespace RebelCode\Bookings;

use RebelCode\Time\PeriodInterface;

/**
 * Something that represents a booking.
 *
 * @since [*next-version*]
 */
interface BookingInterface extends
    PeriodInterface,
    StatusAwareInterface,
    TransitionableInterface
{
}
