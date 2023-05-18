<?php

class Laptop extends Computer
{
    public $model;
    public $ram;
    public $gpu;
    public $cpu;
    public $storage;
    public $motherboard;
    public $urlPath;
    public $battery;

    public function __construct(string $model, string $ram, string $gpu, string $cpu, string $storage, string $motherboard, string $urlPath, string $battery)
    {
        parent::__construct($model, $ram, $gpu, $cpu, $storage, $motherboard, $urlPath);
        $this->battery = $battery;
    }

    public function getType()
    {
        echo "Computer Laptop";
    }

    public function getInfo()
    {
        $info = [
            $this->model,
            $this->ram,
            $this->gpu,
            $this->cpu,
            $this->storage,
            $this->motherboard,
            $this->battery
        ];

        return implode(", ", $info);
    }
};
