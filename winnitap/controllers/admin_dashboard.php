<?php

$slug = 'admin_dashboard';

$title = 'Admin | Winnitap';

$databaseLogger = new App\Lib\DatabaseLogger($dbh);

$logs = $databaseLogger->getLog();
// dd($logs);

// beer
$beer = new Beer($dbh);

$beers = $beer->allBeer();

// reviews
$reviews = allReviews();

// users
$users = allUsers();

// COUNT reviews
$reviewCount = countReviews();

// get price
$price = beerPrice();

if($_SESSION['is_admin'] === '0' || empty($_SESSION['is_admin'])) {
    
    // set error
    $error['is_admin'] = 'You must be an admin user';
    $_SESSION['errors'] = $errors;

    // display flash message
    $_SESSION['flash']['danger'] = 'Oops, you must be an admin user to view this';

    // redirect to login
    header('Location:/?page=login');
    die;
}

require __DIR__ . '/../views/admin_dashboard.php';