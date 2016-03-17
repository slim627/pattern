<?php

class Singleton
{
    private static $value = null;

    private static function __construct() {}

    public static function getInstance()
    {
        if ( null === self::$value) {
            self::$value == new Singletone();
        }

        return self::$value;
    }
}