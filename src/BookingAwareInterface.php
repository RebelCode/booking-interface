<?php

namespace RebelCode\Bookings;

/**
 * Something that is aware of, and can provide, a booking instance.
 *
 * @since 0.1
 */
interface BookingAwareInterface
{
    /**
     * Retrieves the booking associated with this instance.
     *
     * @since 0.1
     *
     * @return BookingInterface|null The booking instance.
     */
    public function getBooking();
}
