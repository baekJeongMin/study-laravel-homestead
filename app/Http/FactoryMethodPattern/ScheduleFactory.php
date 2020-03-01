<?php


namespace App\Http\FactoryMethodPattern;

// 스케쥴을 만들어 내는 공장!
class ScheduleFactory
{
    public function getScheduler($schedulerId) : ElevatorSchedulerInterface
    {
        $scheduler = null;
        switch ($schedulerId) {
            case 'throughPut':
                $scheduler = new ThroughputScheduler();
                break;
            case 'responseTime':
                $scheduler = new ResponseTimeScheduler();
                break;
            // 스케쥴 종류가 늘어나면 case 가 하나씩 추가됨.
        }
        return $scheduler;
    }
}
