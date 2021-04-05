<?php

namespace patterns\factorymethod\example2;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): ConcreteProduct1
    {
        return new ConcreteProduct1();
    }
}