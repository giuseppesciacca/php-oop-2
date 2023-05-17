<?php

/**
 * build model for Monitor
 */
class Monitor
{
    public function __construct(public string $inches, public string $resolution)
    {
        $this->$inches;
        $this->$resolution;
    }
}
