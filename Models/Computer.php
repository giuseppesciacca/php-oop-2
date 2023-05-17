<?php

class Computer
{
    public function __construct(public string $ram, public string $gpu, public string $cpu, public string $storage, public string $motherboard)
    {
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->cpu = $cpu;
        $this->storage = $storage;
        $this->motherboard = $motherboard;
    }

    public function getType()
    {
        echo "Computer";
    }
};
