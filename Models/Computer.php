<?php
include_once __DIR__ . '/../Traits/Shops.php';
class Computer
{

    use Shop;

    public $model;
    public $ram;
    public $gpu;
    public $cpu;
    public $storage;
    public $motherboard;
    public $urlPath;

    public function __construct(string $model, string $ram, string $gpu, string $cpu, string $storage, string $motherboard,  string $urlPath)
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

    public function getInfo()
    {
        $info = [
            $this->model,
            $this->ram,
            $this->gpu,
            $this->cpu,
            $this->storage,
            $this->motherboard
        ];

        return implode(", ", $info);
    }
};
