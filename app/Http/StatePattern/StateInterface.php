<?php

namespace App\Http\StatePattern;

interface StateInterface
{
    public function On(Main $main);
    public function Off(Main $main);
}
