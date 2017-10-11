<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;
use Dhii\Time\PeriodInterface;

/**
 * Something that represents a booking.
 *
 * A booking is a period of time during which something is reserved, like a service or resource.
 *
 * This interface provides the foundation for all booking-related logic, by making the booking aware of a status.
 * While being very simple in concept, the status signifies the current state of the booking.
 *
 * Through this awareness, other components in a system can take action on booking status changes as well as influence
 * the booking, and hence possibly other components, through status changes.
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
