<?php

namespace RebelCode\Bookings\Exception;

use Dhii\Exception\ThrowableInterface;
use RebelCode\Bookings\BookingAwareInterface;

/**
 * An exception raised in relation to a booking.
 *
 * @since [*next-version*]
 */
interface BookingExceptionInterface extends
    BookingAwareInterface,
    ThrowableInterface
{
}
