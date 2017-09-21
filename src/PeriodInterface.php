<?php

namespace RebelCode\Bookings;

/**
 * Something that represents a period of time.
 *
 * @since [*next-version*]
 */
interface PeriodInterface
{
    /**
     * Retrieves the timestamp for the start a period.
     *
     * @since [*next-version*]
     *
     * @return int An integer timestamp.
     */
    public function getStart();

    /**
     * Retrieves the timestamp for the end of the period.
     *
     * @since [*next-version*]
     *
     * @return int An integer timestamp.
     */
    public function getEnd();
}
