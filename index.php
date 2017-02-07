<?php

$query = require 'bootstrap.php';

require 'Task.php';


$articles = $query->selectAll('articals');

die(var_dump($articles));

require 'index.view.php';
