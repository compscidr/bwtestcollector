<?php
if(!isset($_GET["name"]) || !isset($_GET["upload"]) || !isset($_GET["download"]) || !isset($_GET["rtt"])) {
    echo "NOTHING SET";
    exit;
}

require_once("config.php");
require_once("Medoo/src/Medoo.php");
use Medoo\Medoo;

// Initialize
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => DB_NAME,
    'server' => DB_SERVER,
    'username' => DB_USER,
    'password' => DB_PASSWORD
]);

// Enjoy
$database->insert('measurement', [
    'ip' => $_SERVER['REMOTE_ADDR'],
    'name' => $_GET["name"],
    'upload' => $_GET["upload"],
    'download' => $_GET["download"],
    'rtt' => $_GET["rtt"]
]);

?>
