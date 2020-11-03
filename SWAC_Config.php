<?php
//Allow Registration.
define("ALLOW_REGISTER",false);

// Developer ID Server Database
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

// Token Server
define('TOKEN_DB_SERVER', 'localhost');
define('TOKEN_DB_USERNAME', 'main');
define('TOKEN_DB_PASSWORD', '');
define('TOKEN_DB_NAME', 'token');
// Finish editing
global $tokenlink;

$tokenlink = mysqli_connect(TOKEN_DB_SERVER, TOKEN_DB_USERNAME, TOKEN_DB_PASSWORD, TOKEN_DB_NAME);

if ($tokenlink === false) {
    die("Database connection could not be successfully established. Application will now stop all processes.");
}