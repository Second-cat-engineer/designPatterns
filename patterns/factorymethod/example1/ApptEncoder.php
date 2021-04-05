<?php

namespace patterns\factorymethod\example1;

abstract class ApptEncoder
{
    abstract public function encode(): string;
}