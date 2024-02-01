<?php

$slug = 'search';

$beer = new Beer();

$breweries = allBreweries();

if(empty($_POST['search'])) {
    // redirect to beer
    header('Location:/?page=beer');
    die;
}
else {
    // run search
    $beers = $beer->searchBeer($_POST['search']);
    // dd($beers);
}


require __DIR__ . '/../views/beer.php';