<?php

class Connection
{

    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=test_sub_project', 'root', '');
        }
        catch (PDOException $e) {
            die(showPdoError($e));
        }
    }

}
