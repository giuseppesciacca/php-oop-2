<?php

class Laptop extends Computer
{
    public function __construct(public string $model, public string $ram, public string $gpu, public string $cpu, public string $storage, public string $motherboard, public string $urlPath, public string $battery)
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
