<?php

namespace Tests\Http\StatePattern;

use App\Http\StatePattern\Main;
use Tests\TestCase;

class MainTest extends TestCase
{
    public function testMain(){
        $main = new Main();

        $main->On();
        $main->Off();
        $main->On();
        $main->Off();
        $main->Off();
        $main->Off();
    }
}
