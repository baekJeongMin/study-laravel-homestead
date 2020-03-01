<?php


namespace App\Http\FactoryMethodPattern;


class ElevatorController
{
    private $id;
    private $curFloor;

    /**
     * ElevatorController constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
        $this->curFloor = 1;
    }

    public function gotoFloor($destination)
    {
        echo $this->id.' 번 엘리베이터 '.$this->curFloor.' 층에서 ';
        $this->curFloor = $destination;
        echo $destination." 층으로 이동~\n";
    }
}
