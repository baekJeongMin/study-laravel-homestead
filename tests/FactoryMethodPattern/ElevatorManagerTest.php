<?php


namespace Tests\FactoryMethodPattern;


use App\Http\FactoryMethodPattern\ElevatorManager;
use App\Http\FactoryMethodPattern\ScheduleFactory;
use Tests\TestCase;

class ElevatorManagerTest extends TestCase
{
    public function test()
    {
        // Given
        $scheduleFactory = new ScheduleFactory();
        $elevatorManager = new ElevatorManager($scheduleFactory);

        $elevatorManager->elevatorManager(2, 'throughPut');
//        $elevatorManager->elevatorManager(2, 'responseTime');

        $elevatorManager->requestElevator(3);
        $elevatorManager->requestElevator(4);
        $elevatorManager->requestElevator(5);

        $elevatorManager->setSchedule('responseTime');

        $elevatorManager->requestElevator(3);
        $elevatorManager->requestElevator(4);
        $elevatorManager->requestElevator(5);

    }
}
