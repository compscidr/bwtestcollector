<?php
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

if(isset($_GET["name"])) {
  $data = $database->select('measurement', '*', ['name' => $_GET["name"]]);
} else if(isset($_GET["ip"])) {
  $data = $database->select('measurement', '*', ['ip' => $_GET["ip"]]);
} else {
  $data = $database->select('measurement', '*', []);
}

echo json_encode($data);

?>
