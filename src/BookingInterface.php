<?php

namespace RebelCode\Bookings;

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
