<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;
use RebelCode\Time\PeriodInterface;

/**
 * Something that represents a booking.
 *
 * A booking is a period of time that is reserves something for that period of time.
 *
 * This interface provides the foundation for all booking-related logic, by making the booking aware of a status.
 * While being a very simple concept, the status signifies the current state of the booking and can be used to
 * signal changes made to the booking.
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
