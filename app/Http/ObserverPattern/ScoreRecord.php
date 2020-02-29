<?php
namespace App\Http\ObserverPattern;

class ScoreRecord extends Subject
{
    private $scores = array();

    public function addScore($score)
    {
        array_push($this->scores, $score);
        $this->notifyObservers();
    }

    public function getScoreRecord()
    {
        return $this->scores;
    }
}
