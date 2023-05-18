<?php

trait Shop
{
    private $shops = [];

    public function setShop(string $shop)
    {
        try {
            if (!in_array($shop, $this->shops) && (!is_numeric($shop))) {
                array_push($this->shops, $shop);
            } else {
                throw new Exception('Is not a string');
            }
        } catch (Exception $e) {
            var_dump('Eccezione: ' . $e->getMessage());
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
