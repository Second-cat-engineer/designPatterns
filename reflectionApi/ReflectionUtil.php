<?php

namespace reflectionApi;

class ReflectionUtil
{
    public static function getClassSource(\ReflectionClass  $class)
    {
        $path = $class->getFileName();
        $lines = file($path);
        $from = $class->getStartLine();
        $to = $class->getEndLine();
        $len = $to - $from + 1;

        $x = $class->getMethods();

        return implode(array_slice($lines, $from - 1, $len));
    }
}