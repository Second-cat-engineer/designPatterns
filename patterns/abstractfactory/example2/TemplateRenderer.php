<?php


namespace patterns\abstractfactory\example2;


interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}