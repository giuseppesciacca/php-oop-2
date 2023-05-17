<?php

class Desktop extends Computer
{
    public function __construct(public string $model, public string $ram, public string $gpu, public string $cpu, public string $storage, public string $motherboard, public string $urlPath, public string $mouse, public string $monitor, public string $case, public string $psu)
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
            $this->monitor,
            $this->case,
            $this->psu
        ];

        return implode(", ", $info);
    }
};
