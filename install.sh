#!/bin/bash
#cp config.php.example config.php

echo "Enter the DB_SERVER: "
read server

echo "Enter the DB_USER: "
read user

echo "Enter the DB_PASSWORD: "
read password

echo "Writing to config file: config.php"
echo '<?php
define("DB_NAME", "bw_monitor");
define("DB_SERVER", "'$server'");
define("DB_USER", "'$user'");
define("DB_PASSWORD", "'$password'");
?>' > config.php;
