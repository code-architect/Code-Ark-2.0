<?php

/**
 * Show pdo errors
 * @param $e
 * @return string
 */
function showPdoError($e)
{
    $error = 'Could Not Connect: '.$e->getMessage().'<br>';
    $error .= 'There is an error on line: '.$e->getLine().'<br>';
    $error .= 'Error Number: '.$e->getCode().'<br>';
    $error .= 'Error File Location: '.$e->getFile();

    return $error;
}



function showPrintR($string)
{
    echo "<pre>";
    print_r($string);
    echo "</pre>";
}



function showVarDump($string)
{
    echo "<pre>";
    var_dump($string);
    echo "</pre>";
}