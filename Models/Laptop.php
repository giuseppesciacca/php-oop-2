<?php

class Laptop extends Computer
{
    function __construct(public string $trackpad, public string $battery, public string $case)
    {
        $this->trackpad = $trackpad;
        $this->battery = $battery;
    }
};
