<?php
//Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
//Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse.

class Computer
{
    function __construct(public string $ram, public string $gpu, public string $cpu, public string $storage, public string $motherboard)
    {
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->cpu = $cpu;
        $this->storage = $storage;
        $this->motherboard = $motherboard;
    }
};

class Desktop extends Computer
{
    function __construct(public string $mouse, public string $monitor, public string $case, public string $psu)
    {
        $this->mouse = $mouse;
        $this->monitor = $monitor;
        $this->case = $case;
        $this->psu = $psu;
    }
};

class Laptop extends Computer
{
    function __construct(public string $trackpad, public string $battery, public string $case)
    {
        $this->trackpad = $trackpad;
        $this->battery = $battery;
    }
};
