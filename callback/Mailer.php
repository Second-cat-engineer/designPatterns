<?php

namespace callback;

class Mailer
{
    public function doMail(Product $product)
    {
        echo 'Отправляется ' . $product->name;
    }
}