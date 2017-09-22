<?php

namespace RebelCode\Bookings\UnitTest;

use Xpmock\TestCase;
use RebelCode\Bookings\TransitionableInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class TransitionableInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\Bookings\TransitionableInterface';

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
            ->getStatus()
            ->transition();

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
            'RebelCode\Bookings\StatusAwareInterface',
            $subject,
            'Test subject does not extend parent interface.'
        );

        $this->assertInstanceOf(
            'RebelCode\Bookings\TransitionCapableInterface',
            $subject,
            'Test subject does not extend parent interface.'
        );
    }
}
