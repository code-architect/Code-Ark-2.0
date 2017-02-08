<?php

$articles = App::get('database')->selectAll('articals');


require 'views/index.view.php';
