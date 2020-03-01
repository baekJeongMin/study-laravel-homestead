<?php


namespace App\Http\FactoryMethodPattern;

// 엘리베이터 관리 클래스
class ElevatorManager
{
    private $elevators;
    private $schedulerId;
    private $scheduleFactory;

    /**
     * ElevatorManager constructor.
     * @param $scheduleFactory
     */
    public function __construct(ScheduleFactory $scheduleFactory)
    {
        $this->scheduleFactory = $scheduleFactory;
    }

    public function elevatorManager($count, $schedulerId)
    {
        $this->elevators = [];
        for ($i=0; $i<$count; $i++){
            array_push($this->elevators, (new ElevatorController($i)) );
        }
        $this->schedulerId = $schedulerId;
    }

    public function setSchedule($schedulerId)
    {
        $this->schedulerId = $schedulerId;
    }

    public function requestElevator($destination)
    {
        $elevatorSchedule = $this->scheduleFactory->getScheduler($this->schedulerId);
        echo $this->schedulerId." 스케쥴 사용!! \n";

        $selectElevator = $elevatorSchedule->selectElevator($destination);
        $this->elevators[$selectElevator]->gotoFloor($destination);
    }
}
