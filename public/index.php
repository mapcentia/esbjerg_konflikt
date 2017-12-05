<?php
ini_set("display_errors", "Off");
ini_set('memory_limit', '256M');
error_reporting(3);

use \app\inc\Route;

include_once("../app/conf/App.php");
new \app\conf\App();
// Set the host name
include_once("../app/conf/hosts.php");

Route::add("api/v1/searchall");
Route::add("api/v1/search");
Route::add("api/v1/codes");

header('HTTP/1.0 404 Not Found');
echo "<h1>404 Not Found</h1>";
echo "The page that you have requested could not be found.";
exit();