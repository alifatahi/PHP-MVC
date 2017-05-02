<?php

namespace App\Core;


/**
 * Class App
 */
class App{

    protected static $registry = [];

    /**
     * @param $key
     * @param $value
     *  its bind the key we declare and pass the value to it
     *  also it should be static
     */
    public static function bind($key,$value)
    {
        static::$registry[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     * @throws Exception
     *  method to get the key and validate it
     */
    public static function get($key)
    {
        if (! array_key_exists($key, static::$registry)){
            throw new Exception("No {$key} is bound in container ");
        }
        return static::$registry[$key];
    }
}