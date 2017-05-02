<?php

namespace App\Core;


/**
 * Class Request
 */
class Request
{
    /**
     * @return string
     * make uri and trim the first and last /
     */
    public static function uri()
    {
        //parse url and also php url path
        return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), '/');
    }

    /**
     *  we get type of our method we send (get,post)
     */
    public static function method()
    {
       return $_SERVER['REQUEST_METHOD'];
    }
}