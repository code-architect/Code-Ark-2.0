<?php

class App
{

    protected static $registry = [];

    /**
     * Register the key into the registry with the value
     * @param $key label
     * @param $value the value
     */
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }


    /**
     * Get the existing value from the registry
     * @param $key
     * @return mixed
     * @throws Exception
     */
    public static function get($key)
    {
        // check if the key exists in the registry
        if(!array_key_exists($key, static::$registry))
        {
            throw new Exception("No {$key} is bound in the container");
        }

        return static::$registry[$key];
    }

}


