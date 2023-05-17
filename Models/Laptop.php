<?php

class Laptop extends Computer
{
    public function __construct(public string $trackpad, public string $battery, public string $case)
    {
        $this->trackpad = $trackpad;
        $this->battery = $battery;
    }

    public function getType()
    {
        echo "Computer Laptop";
    }
};
