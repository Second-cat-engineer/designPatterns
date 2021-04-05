<?php

namespace patterns\factorymethod\example2;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): ConcreteProduct2
    {
        return new ConcreteProduct2();
    }
}