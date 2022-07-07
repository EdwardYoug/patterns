<?php

namespace Patterns\Singleton;

class DBConnection
{
    private static $instance = null;
    private $driver;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    static function getInstance(): DBConnection
    {
        return self::$instance ?? (self::$instance = new self());
    }

    public function getDriver(): string
    {
        return $this->driver;
    }

    public function setDriver(string $driver)
    {
        $this->driver = $driver;
    }
}