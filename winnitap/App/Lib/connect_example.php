<?php

// DSN to connect to PDO
define('DB_DSN', 'mysql:host=localhost;dbname=MYDBNAME');
define('DB_USER', 'MYDBUSER');
define('DB_PASS', 'MYPASS');

// pass through constants to PDO
$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);

// to display error
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// to set fetched data to display as associative array
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);