<?php

$slug = 'search_admin';

$beer = new Beer();

$breweries = allBreweries();

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
elseif(empty($_POST['search'])) {
    // redirect to beer
    header('Location:/?page=admin_dashboard');
    die;
}
else {
    // run search
    $beers = $beer->searchBeerAdmin($_POST['search']);
}


require __DIR__ . '/../views/admin_dashboard.php';