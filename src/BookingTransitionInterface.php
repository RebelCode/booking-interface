<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface;

/**
 * Something that represents a transition for a booking status.
 *
 * Objects that implement this interface can be used as argument for {@link BookingInterface::transition()}.
 * Therefore, the {@link __toString()} method SHOULD return a valid transition key.
 *
 * The {@link getBooking()} method allows external components to obtain the booking undergoing transition directly
 * from the transition instance. Thus, components can depend on consuming a transition instance, rather than having to
 * fetch a booking instance from some other component.
 *
 * It is recommended to construct instances that implement this interface only at the required stage. For instance,
 * a booking can internally construct a transition object when its {@link transition()} method is invoked, and then
 * pass such an instance to other components. This is to ensure interoperability between bookings and other state
 * machines by having the transition be initially a string, that may be turned into an object if required (possibly
 * with a different transition key).
 *
 * @since [*next-version*]
 */
interface BookingTransitionInterface extends
    StringableInterface,
    BookingAwareInterface
{
}
