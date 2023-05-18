<?php

/**
 * build model for Monitor
 */
class Monitor
{

    public $inches;
    public $resolution;

    public function __construct(string $inches, string $resolution)
    {
        $this->inches = $inches;
        $this->resolution = $resolution;
    }
}
