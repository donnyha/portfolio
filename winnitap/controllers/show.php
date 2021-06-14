<?php

$slug = 'show';

if(empty($_GET['id'])) {
    die('404 - Not Found');
}

$beers = new Beer($dbh);

// get current beer
$beer = $beers->oneBeer(intval($_GET['id']));

$title = $beer['name'];

// add beer id to session
$_SESSION['beer_id'] = $beer['id'];

// get brewery id
$brewery_id = getBreweryIDByBeer($beer['id']);

// $reviews = oneReview($current_user['id']);

// get all reviews
$reviews = allReviewsByBeer(intval($_SESSION['beer_id']));

// dd($reviews);

require __DIR__ . '/../views/show.php';