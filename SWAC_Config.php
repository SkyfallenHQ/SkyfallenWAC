<?php
//Allow Registration.
define("ALLOW_REGISTER",false);

// Update Server Database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'main');
define('DB_PASSWORD', '');
define('DB_NAME', 'developerid');
// Finish editing
global $link;

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
    die("Database connection could not be successfully established. Application will now stop all processes.");
}