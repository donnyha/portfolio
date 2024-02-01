<?php

$slug = 'edit_beer';

if(empty($_GET['id'])) {
    die('Please pick a review to edit');
}

$beers = new Beer();

$beer = $beers->oneBeer(intval($_GET['id']));

// dd($beer);

require __DIR__ . '/../views/edit_beer.php';