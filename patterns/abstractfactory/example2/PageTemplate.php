<?php


namespace patterns\abstractfactory\example2;


interface PageTemplate
{
    public function getTemplateString(): string;
}