<?php

require 'database/Connection.php';
include 'functions.php';
require 'Task.php';

$pdo = Connection::make();


$statement = $pdo->prepare('select * from articals');

$statement->execute();
$articles = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');



require 'index.view.php';
