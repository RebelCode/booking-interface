<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of an ID for a bookable resource.
 *
 * @since [*next-version*]
 */
interface ResourceIdAwareInterface
{
    /**
     * Retrieves the ID of the bookable resource.
     *
     * @since [*next-version*]
     *
     * @return int|string|Stringable The ID of the bookable resource.
     */
    public function getResourceId();
}
