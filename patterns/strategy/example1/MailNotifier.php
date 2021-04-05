<?php

namespace patterns\strategy\example1;

class MailNotifier extends Notifier
{
    public function inform($message)
    {
        echo 'уведомление по электронной почте: ' . $message;
    }
}