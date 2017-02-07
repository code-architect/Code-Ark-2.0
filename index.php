<?php

$query = require 'core/bootstrap.php';


$router = new Router();

require 'routes.php';


$path = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($path);
