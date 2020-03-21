<?php

$database = require 'bootstrap.php';

$router = new Router;
require 'routes.php';

require '$router->direct';
