<?php

namespace App\Http\StatePattern;

class Sleeping implements StateInterface
{
    public function On(Main $main)
    {
        $main->setState(new On());
        echo "상태 Sleeping 인데 On 누름. 상태 On 으로 변경\n";
    }

    public function Off(Main $main)
    {
        $main->setState(new Off());
        echo "상태 Sleeping 인데 Off 누름. 상태 Off 로 변경\n";
    }
}
