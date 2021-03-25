<?php

namespace callback;

class Totalizer
{
    public static function warnAmount()
    {
        return function (Product $product) {
            if ($product->price > 100) {
                echo 'Покупается дорогой товар ' . $product->price;
            }
        };
    }
}