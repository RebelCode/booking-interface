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
     * The key for the ID in the factory config.
     *
     * @since [*next-version*]
     */
    const K_ID = 'id';

    /**
     * The key for the start in the factory config.
     *
     * @since [*next-version*]
     */
    const K_START = 'start';

    /**
     * The key for the end in the factory config.
     *
     * @since [*next-version*]
     */
    const K_END = 'end';

    /**
     * The key for the status in the factory config.
     *
     * @since [*next-version*]
     */
    const K_STATUS = 'status';

    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return BookingInterface The created booking instance.
     */
    public function make($config = null);
}
