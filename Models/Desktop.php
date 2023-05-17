<?php

class Desktop extends Computer
{
    public function __construct(public string $mouse, public string $monitor, public string $case, public string $psu)
    {
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
