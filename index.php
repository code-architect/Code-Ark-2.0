<?php

include 'functions.php';
require 'Task.php';


try {
    $pdo = new PDO('mysql:host=localhost;dbname=test_sub_project', 'root', '');
}
catch (PDOException $e) {
    die(showPdoError($e));
}


$statement = $pdo->prepare('select * from articals');

$statement->execute();
$articles = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

var_dump($articles[0]->foobar());

require 'index.view.php';
