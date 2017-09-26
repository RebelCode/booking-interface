<?php

namespace RebelCode\Bookings;

use Dhii\Machine\StatusAwareInterface;
use RebelCode\Time\PeriodInterface;

/**
 * Something that represents a booking.
 *
 * A booking is a period of time that is reserves something for that period of time.
 *
 * This interface provides the foundation for all booking-related logic, by making the booking aware of a status.
 * While being very simple in principle, the status allows booking implementations to use it as a mechanism for
 * experiencing changes, operations or updates. In other words, transition to new states.
 *
 * Separate objects can control and/or listen to the transitions of a booking, allowing them to influence the
 * transition or take further action.
 *
 * @since [*next-version*]
 */
interface BookingInterface extends
    PeriodInterface,
    StatusAwareInterface
{
}
