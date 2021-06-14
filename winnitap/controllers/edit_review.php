<?php

$slug = 'edit_review';

if(empty($_GET['id'])) {
    die('Please pick a review to edit');
}

$review = review(intval($_GET['id']));

// dd($review);


require __DIR__ . '/../views/edit_review.php';