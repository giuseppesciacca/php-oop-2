<?php

trait Shop
{
    private $shops = [];

    public function setShop($shop)
    {
        if (!in_array($shop, $this->shops) && is_string($shop)) {
            array_push($this->shops, $shop);
        } elseif (!is_string($shop)) {
            throw new Exception('It\'s not a string');
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
