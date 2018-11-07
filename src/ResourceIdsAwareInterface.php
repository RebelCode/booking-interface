<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;
use stdClass;
use Traversable;

/**
 * Something that is aware of an IDs for a bookable resources.
 *
 * @since 0.2
 */
interface ResourceIdsAwareInterface
{
    /**
     * Retrieves the IDs of the bookable resources.
     *
     * @since 0.2
     *
     * @return int[]|string[]|Stringable[]|stdClass|Traversable The list of bookable resource IDs.
     */
    public function getResourceIds();
}
