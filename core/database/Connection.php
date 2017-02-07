<?php

class Connection
{

    public static function make($config)
    {
        try {

            return new PDO(
                $config['connection'].';dbname='.$config['dbname'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }
        catch (PDOException $e) {
            die( self::showPdoError($e));
        }
    }


    /**
     * Show PDO error
     * @param $e
     * @return string
     */
    public static function showPdoError($e)
    {
        $error = 'Could Not Connect: '.$e->getMessage().'<br>';
        $error .= 'There is an error on line: '.$e->getLine().'<br>';
        $error .= 'Error Number: '.$e->getCode().'<br>';
        $error .= 'Error File Location: '.$e->getFile();

        return $error;
    }

}
