<?php

require 'database/Connections.php';
require 'database/QueryBuilder.php';
require 'Task.php';

return new QueryBuilder(Connection::make());
