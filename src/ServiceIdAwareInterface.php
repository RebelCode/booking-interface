<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of an ID for a bookable service.
 *
 * @since [*next-version*]
 */
interface ServiceIdAwareInterface
{
    /**
     * Retrieves the ID of the bookable service.
     *
     * @since [*next-version*]
     *
     * @return int|string|Stringable The ID of the bookable service.
     */
    public function getServiceId();
}
