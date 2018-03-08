<?php

namespace RebelCode\Bookings;

use Dhii\Factory\FactoryInterface;

/**
 * Something that can create new booking instances.
 *
 * @since [*next-version*]
 */
interface BookingFactoryInterface extends FactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return BookingInterface The created booking instance.
     */
    public function make($config = null);
}
