<?php

namespace patterns\singleton;

class Singleton
{
    /**
     * Объект одиночки храниться в статичном поле класса. массив, так как может иметь подклассы.
     */
    private static $instances = [];

    protected function __construct() { }

    protected function __clone() { }

    /**
     * не должны быть восстанавливаемыми из строк.
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     * При первом запуске, он создаёт экземпляр одиночки и помещает его в статическое поле.
     * При последующих запусках, он возвращает клиенту объект, хранящийся в статическом поле.
     */
    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    /**
     * бизнес-логика, которая может быть выполнена на его экземпляре.
     */
    public function someBusinessLogic()
    {
        // ...
    }
}