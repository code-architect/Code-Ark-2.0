<?php

$query = require 'bootstrap.php';

require 'Task.php';


$articles = $query->selectAll('articals');

require 'index.view.php';
