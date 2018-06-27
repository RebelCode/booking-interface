<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of an ID for an order made for a booking.
 *
 * @since [*next-version*]
 */
interface OrderIdAwareInterface
{
    /**
     * Retrieves the ID of the order.
     *
     * @since [*next-version*]
     *
     * @return int|string|Stringable The ID of the order.
     */
    public function getOrderId();
}
