<?php

$slug = 'beer';

$title = 'Beer | Winnitap';

$beer = new Beer($dbh);

if(!empty($_GET['breweries'])) {
    $beers = $beer->allBeerByBreweries($_GET['breweries']);

    if(empty($beers)) {
        die('404 - Page not found');
    }
}
else {
    $beers = $beer->allBeer();
    // dd($beers);
}

$breweries = allBreweries();

// dd($breweries);

// dd($beers[0]['avg_rating']);

require __DIR__ . '/../views/beer.php';