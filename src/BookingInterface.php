<?php

namespace RebelCode\Bookings;

use Dhii\Data\IdAwareInterface;
use Dhii\Time\PeriodInterface;

/**
 * Something that represents a particular period of time during which a resource is reserved.
 *
 * @since 0.1
 */
interface BookingInterface extends
    /* @since 0.1 */
    IdAwareInterface,
    /* @since 0.1 */
    PeriodInterface,
    /* @since 0.2 */
    ResourceIdsAwareInterface
{
}
