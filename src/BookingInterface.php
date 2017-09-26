<?php

namespace RebelCode\Bookings;

use Dhii\Machine\ReadableStateMachineInterface;
use RebelCode\Time\PeriodInterface;

/**
 * Something that represents a booking.
 *
 * A booking is a period of time that is reserves something, be it a service or resource.
 *
 * This interface provides the foundation for all booking-related logic, by making the booking a state machine.
 * By using the {@link transition()} method, a booking can change its status (see {@see getStatus()}) and undergo
 * changes. These changes can involve other logical components, which together can make up the booking logic of your
 * application.
 *
 * @since [*next-version*]
 */
interface BookingInterface extends
    PeriodInterface,
    ReadableStateMachineInterface
{
}
