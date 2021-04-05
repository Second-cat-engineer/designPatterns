<?php

namespace patterns\strategy\example1;

class RegistrationMgr
{
    public function register(Lesson $lesson)
    {
        // Сделать что-нибудь с классом и отправить кому нибудь сообщение
        $notifier = Notifier::getNotifier();
        $notifier->inform('новое занятие: стоимость - ' . $lesson->cost());
    }
}