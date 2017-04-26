<?php

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
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}