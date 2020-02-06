<?php
namespace App\Http\ObserverPattern;

class DataSheetView implements Observer
{
    private $scoreRecord;
    private $viewCount;

    public function __construct(ScoreRecord $scoreRecord, $viewCount)
    {
        $this->scoreRecord = $scoreRecord;
        $this->viewCount = $viewCount;
    }

    public function update()
    {
        $record = $this->scoreRecord->getScoreRecord();
        $this->displayScores($record, $this->viewCount);
    }

    public function displayScores($record, $viewCount)
    {
        dump( 'List of '.$viewCount.'entries');
        for ($i = 0 ; $i < $viewCount && $i < count($record) ; $i++) {
            dump($record[$i]);
        }
    }
}
