<?php

namespace App\Http\StatePattern;

class Off implements StateInterface
{
    public function On(Main $main)
    {
        $main->setState(new On());
        echo "상태 Off 인데 On 눌러서 On 됨\n";
    }

    public function Off(Main $main)
    {
        echo "상태 Off 인데 Off 누름. 아무일도 안일어남\n";
    }
}
