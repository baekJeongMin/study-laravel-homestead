<?php

namespace App\Http\ObserverPattern;

use Illuminate\Support\Collection;

class MinMaxView implements Observer
{
    private $scoreRecord;

    public function __construct(ScoreRecord $scoreRecord)
    {
        $this->scoreRecord = $scoreRecord;
    }

    public function update()
    {
        $record = $this->scoreRecord->getScoreRecord();
        $this->displayMinMax($record);
    }

    public function displayMinMax($record)
    {
        $min = (new Collection($record))->min();
        $max = (new Collection($record))->max();

        dump('min '.$min.'  max '.$max);
    }
}
