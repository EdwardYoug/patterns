<?php

namespace Patterns\Observer;

use Patterns\Observer\Interfaces\ObservableInterface;
use Patterns\Observer\Interfaces\ObserverInterface;

class Observable implements ObservableInterface
{

    /**
     * @var array $observers
     */
    private array $observers = [];

    /**
     * @param ObserverInterface $observer
     */
    public function addObserver(ObserverInterface $observer)
    {
        $this->observers[get_class($observer)] = $observer;
    }

    /**
     * @param ObserverInterface $observer
     */
    public function removeObserver(ObserverInterface $observer)
    {
        unset($this->observers[get_class($observer)]);
    }

    /**
     * @return void
     */
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->handleEvent($this);
        }
    }
}