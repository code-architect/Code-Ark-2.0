<?php

class Connection
{

    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=test_sub_project', 'root', '');
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
