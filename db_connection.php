<?php
ob_start();
//error_reporting(E_ALL);
//ini_set("display_errors", 1); 
ini_set('max_execution_time', 90000);
ini_set("memory_limit", -1);
date_default_timezone_set('America/Toronto');
define("SITE_URL_REMOTE", "http://" . $_SERVER['HTTP_HOST'] . "/clientwebsite/UrbanDog/");
define("UPLOAD_PATH", SITE_URL_REMOTE . "uploads/");
define("ADMIN_EMAIL", "info@park9dogs.com");
//header("Cache-control: private, no-cache");
//header("Last-Modified: " . gmdate("D, d M Y H(idea)(worry)") . " GMT");
//header("Pragma: no-cache");
//header("Cache: no-cache");
$isLocal = false;
//define our connection parameter
if ($isLocal == true) {
    define('DB_SERVER', 'localhost'); // eg, localhost - should not be empty for productive servers
    define('DB_SERVER_USERNAME', 'root');
    define('DB_SERVER_PASSWORD', '');
    define('DB_DATABASE', 'park9');
    $conn = mysqli_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE) or die("Error " . mysqli_error($conn));
} else {
    define('DB_SERVER', '172.16.13.12'); // eg, localhost - should not be empty for productive servers
    define('DB_SERVER_USERNAME', 'dmbdemo');
    define('DB_SERVER_PASSWORD', 'W3UG6us79oBhtqPd');
    define('DB_DATABASE', 'dmbdemo_sanderling');
    $conn = mysqli_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE) or die("Error " . mysqli_error($conn));
}

include_once 'klass_class.php';
$klassObj = new klass_class();
ob_end_flush();
?>