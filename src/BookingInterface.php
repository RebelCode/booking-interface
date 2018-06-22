<?php

namespace RebelCode\Bookings;

use Dhii\Data\IdAwareInterface;
use Dhii\Time\PeriodInterface;

/**
 * Something that represents a booking.
 *
 * A booking is a period of time during which a particular resource is reserved.
 *
 * Through awareness of a "status", a booking can provide a contextual indicator about the current stage of its
 * lifetime in a system.
 *
 * @since [*next-version*]
 */
interface BookingInterface extends
    /* @since [*next-version*] */
    IdAwareInterface,
    /* @since [*next-version*] */
    PeriodInterface,
    /* @since [*next-version*] */
    StatusAwareInterface,
    /* @since [*next-version*] */
    ResourceIdAwareInterface
{
}
