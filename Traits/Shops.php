<?php

trait Shop
{
    private $shops = [];

    public function setShop(string $shop)
    {
        if (!in_array($shop, $this->shops)) {
            array_push($this->shops, $shop);
        }
    }

    public function getShopArray()
    {
        return $this->shops;
    }

    public function getShopString()
    {
        return implode(', ', $this->shops);
    }
}
