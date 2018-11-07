<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of an IDs for a bookable resources.
 *
 * @since [*next-version*]
 */
interface ResourceIdsAwareInterface
{
    /**
     * Retrieves the IDs of the bookable resources.
     *
     * @since [*next-version*]
     *
     * @return int[]|string[]|Stringable[] The list of bookable resource IDs.
     */
    public function getResourceIds();
}
