<?php

namespace Patterns\Observer;

use Patterns\Observer\Interfaces\ObservableInterface;
use Patterns\Observer\Interfaces\ObserverInterface;

class Observer implements ObserverInterface
{
    /**
     * @param ObservableInterface $observable
     * @return mixed|void
     */
    public function handleEvent(ObservableInterface $observable)
    {
        echo 'Тригернулся handle Event для'.get_class($observable);
    }
}