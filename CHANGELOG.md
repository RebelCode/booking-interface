# Change log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [[*next-version*]] - YYYY-MM-DD
### Added
- `StatusAwareInterface` for awareness of a booking status.
- `ResourceIdAwareInterface` for awareness of a resource ID.
- `ServiceIdAwareInterface` for awareness of a service ID.
- `ClientIdAwareInterface` for awareness of a client ID.
- `OrderIdAwareInterface` for awareness of an order ID.
- `ServiceBookingInterface` that is both a booking and aware of a service.

## Changed
- `BookingInterface` now extends `ResourceIdAwareInterface`.
- Removed `BookingInterface#getStatus()` in favor of extending StatusAwareInterface`.
- Factory config key constants in `BookingFactoryInterface`.

## [0.1-alpha1] - 2018-05-14
Initial version.
