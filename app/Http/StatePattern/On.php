<?php

namespace App\Http\StatePattern;

class On implements StateInterface
{
    public function On(Main $main)
    {
        echo "상태 On 인데 On 누름. 아무일도 안일어남\n";
    }

    public function Off(Main $main)
    {
        $main->setState(new Sleeping());
        echo "상태 On 인데 Off 눌러서 sleeping 으로 변경\n";
    }
}
