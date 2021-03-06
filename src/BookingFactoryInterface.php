<?php

namespace RebelCode\Bookings;

use Dhii\Factory\DataObjectFactoryInterface;

/**
 * Something that can create new booking instances.
 *
 * @since 0.1
 */
interface BookingFactoryInterface extends DataObjectFactoryInterface
{
    /**
     * The key for the ID in the factory config.
     *
     * @since 0.2
     */
    const K_DATA_ID = 'id';

    /**
     * The key for the start in the factory config.
     *
     * @since 0.2
     */
    const K_DATA_START = 'start';

    /**
     * The key for the end in the factory config.
     *
     * @since 0.2
     */
    const K_DATA_END = 'end';

    /**
     * {@inheritdoc}
     *
     * @since 0.1
     *
     * @return BookingInterface The created booking instance.
     */
    public function make($config = null);
}
