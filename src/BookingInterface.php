<?php

namespace RebelCode\Bookings;

use Dhii\Data\IdAwareInterface;
use Dhii\Time\PeriodInterface;

/**
 * Something that represents a particular period of time during which a resource is reserved.
 *
 * @since [*next-version*]
 */
interface BookingInterface extends
    /* @since [*next-version*] */
    IdAwareInterface,
    /* @since [*next-version*] */
    PeriodInterface,
    /* @since [*next-version*] */
    ResourceIdsAwareInterface
{
}
