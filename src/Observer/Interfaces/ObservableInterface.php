<?php

namespace Patterns\Observer\Interfaces;

interface ObservableInterface
{
    /**
     * @param ObserverInterface $observer
     * @return mixed
     */
    public function addObserver(ObserverInterface $observer);

    /**
     * @param ObserverInterface $observer
     * @return mixed
     */
    public function removeObserver(ObserverInterface $observer);

    /**
     * @return mixed
     */
    public function notifyObservers();
}