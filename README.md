# RebelCode - Booking Interface

[![Build Status](https://travis-ci.org/RebelCode/booking-interface.svg?branch=develop)](https://travis-ci.org/RebelCode/booking-interface)
[![Code Climate](https://codeclimate.com/github/RebelCode/booking-interface/badges/gpa.svg)](https://codeclimate.com/github/RebelCode/booking-interface)
[![Test Coverage](https://codeclimate.com/github/RebelCode/booking-interface/badges/coverage.svg)](https://codeclimate.com/github/RebelCode/booking-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/rebelcode/booking-interface/version)](https://packagist.org/packages/rebelcode/booking-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

## Details
Interfaces for bookings.

### Interfaces
- [`BookingInterface`] - Represents a booking in the basic form, which is a uniquely identified period, on a timeline
identified by a resource ID.
- [`BookingAwareInterface`] - Something that can have a booking retrieved.
- [`BookingFactoryInterface`] - A factory that makes bookings. See constants for keys accepted by `make()`.

[Dhii]:                                                 https://github.com/Dhii/dhii

[`BookingInterface`]:                                   src/BookingInterface.php
[`BookingAwareInterface`]:                              src/BookingAwareInterface.php
[`BookingFactoryInterface`]:                            src/BookingFactoryInterface.php
