<?php

namespace reflectionApi;

class ClassInfo
{
    public static function getData(\ReflectionClass $class)
    {
        $details = '';

        $name = $class->getName();

        if ($class->isUserDefined()) {
            $details .= "\n $name - Определен пользователем";
        }

        if ($class->isInternal()) {
            $details .= "\n $name - встроенный класс";
        }

        if ($class->isInterface()) {
            $details .= "\n $name - интерфейс";
        }

        if ($class->isAbstract()) {
            $details .= "\n $name - абстрактный класс";
        }

        //...

        return $details;
    }
}