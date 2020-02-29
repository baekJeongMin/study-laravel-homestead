<?php
namespace App\Http\ObserverPattern;

abstract class Subject
{
    private $observers = array();

    public function attach(Observer $observer)
    {
        $observerKey = spl_object_hash($observer);
        $this->observers[$observerKey] = $observer;
    }

    public function detach(Observer $observer)
    {
        $observerKey = spl_object_hash($observer);
        unset($this->observers[$observerKey]);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $key => $value) {
            $this->observers[$key]->update();
        }
    }
}
