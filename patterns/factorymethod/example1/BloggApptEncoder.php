<?php

namespace patterns\factorymethod\example1;

class BloggApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return 'данные о встрече закодированы в формате Blogg';
    }
}