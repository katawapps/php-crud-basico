<?php 

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB','beta');

$mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB);

if (mysqli_connect_errno($mysqli)) {
   trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
}

