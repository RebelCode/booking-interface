<?php

namespace RebelCode\Bookings;

use Dhii\Data\IdAwareInterface;
use Dhii\Time\PeriodInterface;
use Dhii\Util\String\StringableInterface as Stringable;

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
interface BookingInterface extends IdAwareInterface, PeriodInterface, ResourceIdAwareInterface
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
