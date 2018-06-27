<?php

namespace RebelCode\Bookings;

/**
 * Something that represents a booking made for a particular service.
 *
 * @since [*next-version*]
 */
interface ServiceBookingInterface extends
    /* @since [*next-version*] */
    BookingInterface,
    /* @since [*next-version*] */
    ServiceIdAwareInterface
{
}
