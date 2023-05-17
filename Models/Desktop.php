<?php

class Desktop extends Computer
{
    public function __construct(public string $model, public string $ram, public string $gpu, public string $cpu, public string $storage, public string $motherboard, public string $mouse, public string $monitor, public string $case, public string $psu)
    {
        parent::__construct($model, $ram, $gpu, $cpu, $storage, $motherboard);
        $this->mouse = $mouse;
        $this->monitor = $monitor;
        $this->case = $case;
        $this->psu = $psu;
    }

    public function getType()
    {
        echo "Computer Desktop";
    }
};
