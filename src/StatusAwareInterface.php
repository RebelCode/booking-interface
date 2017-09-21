<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of, and can provide, a status code.
 *
 * @since [*next-version*]
 */
interface StatusAwareInterface
{
    /**
     * Retrieves the status for this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The status code.
     */
    public function getStatus();
}
