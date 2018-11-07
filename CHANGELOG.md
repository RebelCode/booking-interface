# Change log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [[*next-version*]] - YYYY-MM-DD

## [0.2] - 2018-11-07
### Changed
- Resource ID list may now be a `stdClass` or `Traversable` instance.

## [0.2-alpha1] - 2018-11-07
### Added
- `StatusAwareInterface` for awareness of a booking status.
- `ResourceIdsAwareInterface` for awareness of resource IDs.

### Changed
- `BookingInterface` now extends `ResourceIdsAwareInterface`.
- Factory config key constants in `BookingFactoryInterface`.
- `BookingFactoryInterface` extends `DataObjectFactoryInterface`.

### Removed
- Removed `BookingInterface#getStatus()` in favor of extending `StatusAwareInterface`.

## [0.1-alpha1] - 2018-05-14
Initial version.
