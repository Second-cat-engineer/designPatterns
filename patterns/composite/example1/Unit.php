<?php


namespace patterns\composite\example1;


abstract class Unit
{
    public function getComposite()
    {
        return null;
    }

    abstract public function bombardStrength(): int;
}