<?php

class Desktop extends Computer
{
    public $model;
    public $ram;
    public $gpu;
    public $cpu;
    public $storage;
    public $motherboard;
    public $urlPath;
    public $mouse;
    public $monitor;
    public $case;
    public $psu;


    public function __construct(string $model, string $ram, string $gpu, string $cpu, string $storage, string $motherboard, string $urlPath, string $mouse, Monitor $monitor, string $case, string $psu)
    {
        parent::__construct($model, $ram, $gpu, $cpu, $storage, $motherboard, $urlPath);
        $this->mouse = $mouse;
        $this->monitor = $monitor;
        $this->case = $case;
        $this->psu = $psu;
    }

    public function getType()
    {
        echo "Computer Desktop";
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
            $this->mouse,
            $this->monitor->inches,
            $this->monitor->resolution,
            $this->case,
            $this->psu
        ];

        return implode(", ", $info);
    }
};
