<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface;
use Psr\Container\ContainerInterface;

/**
 * Something that represents a transition for a booking status.
 *
 * Objects that implement this interface can be used as argument for {@link BookingInterface::transition()}.
 * Therefore, the {@link __toString()} method SHOULD return a valid transition key. Any other arbitrary data can be
 * attached to the transition and can be later retrieved via {@link ContainerInterface::get()}.
 *
 * The {@link getBooking()} method allows external components to obtain the booking undergoing transition directly
 * from the transition instance.
 *
 * It is recommended to construct instances that implement this interface only at the required stage. For instance,
 * a booking can internally construct a transition object when its {@link transition()} method is invoked, and then
 * pass such an instance to other components. This is to ensure interoperability between bookings and other state
 * machines by having the transition be initially a string, that may be turned into an object (possible with a different
 * transition key) if required.
 *
 * @since [*next-version*]
 */
interface BookingStatusTransitionInterface extends
    StringableInterface,
    BookingAwareInterface,
    ContainerInterface
{
}
