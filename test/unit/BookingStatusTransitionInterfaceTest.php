<?php

namespace RebelCode\Bookings\UnitTest;

use Xpmock\TestCase;
use RebelCode\Bookings\BookingStatusTransitionInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class BookingStatusTransitionInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\Bookings\BookingStatusTransitionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getBooking()
            ->get()
            ->has()
            ->__toString();

        return $mock->new();
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created.'
        );

        $this->assertInstanceOf(
            'RebelCode\Bookings\BookingAwareInterface',
            $subject,
            'Test subject does not implement parent interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Util\String\StringableInterface',
            $subject,
            'Test subject does not implement parent interface.'
        );
    }

    /**
     * Tests whether the test subject can be cast to a string.
     *
     * @since [*next-version*]
     */
    public function testCanBeCastToString()
    {
        $string = uniqid('string-cast-');
        $subject = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                     ->getBooking()
                     ->__toString($string)
                     ->new();

        $castResult = (string) $subject;

        $this->assertInternalType('object', $subject);
        $this->assertInternalType('string', $castResult);
        $this->assertEquals($string, $castResult, 'Casted result and expected string are not the same.');
    }
}
