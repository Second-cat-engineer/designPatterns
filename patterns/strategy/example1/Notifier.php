<?php

namespace patterns\strategy\example1;

abstract class Notifier
{
    public static function getNotifier(): Notifier
    {
        // Получить конкретный класс в соответствии с конфигурацией или другой логикой
        if (rand(1, 2) === 1) {
            return new MailNotifier();
        } else {
            return new TextNotifier();
        }
    }

    abstract public function inform($message);
}