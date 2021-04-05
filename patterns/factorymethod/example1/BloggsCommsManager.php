<?php

namespace patterns\factorymethod\example1;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return 'Верхний колонтитул';
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggApptEncoder();
    }

    public function getFooterText(): string
    {
        return 'нижний колонтитул';
    }
}