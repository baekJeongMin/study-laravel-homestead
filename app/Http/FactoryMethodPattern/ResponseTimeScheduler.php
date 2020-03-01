<?php


namespace App\Http\FactoryMethodPattern;


class ResponseTimeScheduler implements ElevatorSchedulerInterface
{
    public function selectElevator()
    {
        // 엘레베이터를 고르는 로직이 있겠지~_~
        // 무조건 1번 엘리베이터를 사용하겠음!
        return 1;
    }
}
