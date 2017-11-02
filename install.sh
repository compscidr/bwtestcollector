#!/bin/bash
#cp config.php.example config.php

echo "Enter the DB_SERVER: "
read server

echo "Enter the DB_USER: "
read user

echo "Enter the DB_PASSWORD: "
read password

echo "Writing to config file: config.php"
echo '<?php \n
define("DB_NAME", "bw_monitor");\n
define("DB_SERVER", "$server");\n
define("DB_USER", "$user");\n
define("DB_PASSWORD", "$password");\n
?>' > config.php;
