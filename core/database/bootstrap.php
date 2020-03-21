<?php

require 'core/router.php';

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make()
);
