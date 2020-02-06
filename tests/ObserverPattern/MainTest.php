<?php

namespace Tests\Http\StatePattern;


use App\Http\ObserverPattern\DataSheetView;
use App\Http\ObserverPattern\MinMaxView;
use App\Http\ObserverPattern\ScoreRecord;
use Tests\TestCase;

class MainTest extends TestCase
{
    public function testMain(){
        $scoreRecord = new ScoreRecord();
        $dataSheet3 = new DataSheetView($scoreRecord, 3);
        $dataSheet5 = new DataSheetView($scoreRecord, 6);

        $minMax = new MinMaxView($scoreRecord);

        $scoreRecord->attach($dataSheet3);
        $scoreRecord->attach($dataSheet5);
        $scoreRecord->attach($minMax);

        for ($i = 0 ; $i <= 5 ; $i++) {
            $score = $i * 10 ;
            dump( 'adding '. $score);
            $scoreRecord->addScore($score);
        }
    }
}
