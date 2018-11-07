# RebelCode - Booking Interface

[![Build Status](https://travis-ci.org/RebelCode/booking-interface.svg?branch=develop)](https://travis-ci.org/RebelCode/booking-interface)
[![Code Climate](https://codeclimate.com/github/RebelCode/booking-interface/badges/gpa.svg)](https://codeclimate.com/github/RebelCode/booking-interface)
[![Test Coverage](https://codeclimate.com/github/RebelCode/booking-interface/badges/coverage.svg)](https://codeclimate.com/github/RebelCode/booking-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/rebelcode/booking-interface/version)](https://packagist.org/packages/rebelcode/booking-interface)

## Details

Interfaces for booking systems.

### Interfaces
- [`BookingInterface`] - Represents a booking as a uniquely identified time period that reserves some resources.
- [`BookingAwareInterface`] - Represents objects that are aware of a booking instance.
- [`StatusAwareInterface`] - Represents objects that are aware of a booking status.
- [`ResourceIdsAwareInterface`] - Represents objects that are aware of resource IDs.
- [`BookingFactoryInterface`] - A factory that makes bookings. See constants for keys accepted by `make()`.

[`BookingInterface`]:           src/BookingInterface.php
[`BookingAwareInterface`]:      src/BookingAwareInterface.php
[`BookingFactoryInterface`]:    src/BookingFactoryInterface.php
[`StatusAwareInterface`]:       src/StatusAwareInterface.php
[`ResourceIdsAwareInterface`]:  src/ResourceIdsAwareInterface.php
