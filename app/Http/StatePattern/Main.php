<?php

namespace App\Http\StatePattern;

class Main
{
    private $state;

    /**
     * Main constructor.
     * @param $state
     */
    public function __construct()
    {
        $this->state = new Off();
    }

    public function setState(StateInterface $state){
        $this->state = $state;
    }

    public function On() {
        $this->state->On($this);
    }

    public function Off() {
        $this->state->Off($this);
    }
}
