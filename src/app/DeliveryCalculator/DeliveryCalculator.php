<?php

namespace App\DeliveryCalculator;
class DeliveryCalculator {
    private $price;
    private $method;

    public function setPrice(int $price) : void
    {
        $this->price = $price;
    }

    public function getPrice() : int
    {
        return $this->price;
    }

    public function setMethod(string $method):void
    {
        $this->method = $method;
    }

    public function getMethod() : string
    {
        return $this->method;
    }

    public function calculatePrice($weight, $length, $width, $height, $sellerPrice = null) : float
    {
        $weightPrice = $weight * 50;
        $volumeWeightPrice = (($length * $width * $height) / 1000) * 50;

        $sellerPrice = null;
        if (property_exists($this, 'sellerPrice') && $this->sellerPrice !== null) {
            $sellerPrice = $this->sellerPrice;
        }

        if ($weightPrice >= $volumeWeightPrice && $weightPrice >= $sellerPrice) {
            $this->setPrice($weightPrice);
            $this->setMethod('Weight');
        } elseif ($volumeWeightPrice >= $weightPrice && $volumeWeightPrice >= $sellerPrice) {
            $this->setPrice($volumeWeightPrice);
            $this->setMethod('Volume Weight');
        } elseif ($sellerPrice !== null) {
            $this->setPrice($sellerPrice);
            $this->setMethod('Seller Price');
        }

        return $this->getPrice();
    }
}

