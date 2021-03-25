<?php

namespace callback;

class ProcessSale
{
    private $callback;

    public function registerCallback(callable $callback)
    {
        $this->callback = $callback;
    }

    public function sale(Product $product)
    {
        call_user_func($this->callback, $product);
    }
}