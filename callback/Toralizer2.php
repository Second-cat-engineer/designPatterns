<?php

namespace callback;

class Toralizer2
{
    public static function warnAmount($amt)
    {
        $count = 0;
        return function ($product) use ($amt, &$count) {
            $count += $product->price;
            echo 'сумма: ' . $count;
            if ($count > $amt) {
                echo  'Продано товаров на сумму: ' . $count;
            }
        };
    }
}