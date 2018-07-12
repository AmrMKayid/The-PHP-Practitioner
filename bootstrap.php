<?php 

$config = require 'config';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(

	Connection::make($config['database'])
);

 ?>