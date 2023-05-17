<?php

class Computer
{
    public function __construct(public string $model, public string $ram, public string $gpu, public string $cpu, public string $storage, public string $motherboard,  public string $urlPath)
    {
        $this->model = $model;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->cpu = $cpu;
        $this->storage = $storage;
        $this->motherboard = $motherboard;
        $this->urlPath = $urlPath;
    }

    public function getType()
    {
        echo "Computer";
    }
};
