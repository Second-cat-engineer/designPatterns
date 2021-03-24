<?php

namespace objects;

class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $res = parent::getSummaryLine();
        $res .= $this->numPages . ' стр.';
        return $res;
    }

    public function getPrice()
    {
        return $this->price;
    }
}