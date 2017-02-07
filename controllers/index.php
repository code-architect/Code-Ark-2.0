<?php
$articles = $app['database']->selectAll('articals');


require 'views/index.view.php';
