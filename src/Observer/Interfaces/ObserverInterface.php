<?php

namespace Patterns\Observer\Interfaces;

interface ObserverInterface
{
    /**
     * @param ObservableInterface $observable
     * @return mixed
     */
    public function handleEvent(ObservableInterface $observable);

}