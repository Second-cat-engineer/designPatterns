<?php

namespace patterns\strategy\example1;

class TextNotifier extends Notifier
{
    public function inform($message)
    {
        echo 'Текстовое уведомление: ' . $message;
    }
}