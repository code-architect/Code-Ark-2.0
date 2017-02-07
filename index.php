<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
include 'functions.php';
require 'Task.php';

$pdo = Connection::make();


$query = new QueryBuilder($pdo);

$articles = $query->selectAll('articals');



require 'index.view.php';
