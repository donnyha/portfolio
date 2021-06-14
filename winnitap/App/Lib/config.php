<?php

require __DIR__ . '/../../vendor/autoload.php';

require __DIR__ . '/functions.php';
require __DIR__ . '/connect.php';
require __DIR__ . '/../Models/winnitap_model.php';
require __DIR__ . '/validators.php';
require __DIR__ . '/Validator.php';
require __DIR__ . '/Model.php';
require __DIR__ . '/Beer.php';

ob_start();
session_start();

$errors = $_SESSION['errors'] ?? [];
$_SESSION['errors'] = [];

$posts = $_SESSION['post'] ?? [];
$_SESSION['post'] = [];

$flash = $_SESSION['flash'] ?? [];
$_SESSION['flash'] = [];

$path = __DIR__ . '/../../logs/events.log';

$databaseLogger = new App\Lib\DatabaseLogger($dbh);
$fileLogger = new App\Lib\FileLogger($path);

logEvent($fileLogger);
logEvent($databaseLogger);