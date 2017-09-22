<?php

namespace RebelCode\Bookings;

/**
 * Something that can transition between statuses.
 *
 * @since [*next-version*]
 */
interface TransitionableInterface extends
    StatusAwareInterface,
    TransitionCapableInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return TransitionableInterface The transitioned instance - may not be the same instance.
     */
    public function transition($transition);
}
