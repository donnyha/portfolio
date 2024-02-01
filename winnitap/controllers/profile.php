<?php

$slug = 'profile';

$title = 'Profile | Winnitap';

if($_SESSION['logged_in'] === false || empty($_SESSION['user'])) {
    
    // set error
    $error['logged_in'] = 'You must be logged in';
    $_SESSION['errors'] = $errors;

    // display flash message
    $_SESSION['flash']['danger'] = 'Oops, you must be logged in to view your profile';

    // redirect to login
    header('Location:/?page=login');
    die;
}

// get user
$users = allUsers();

$_SESSION['user_id'] = intval($_SESSION['user_id']);

$user_id = $_SESSION['user_id'];

$current_user = $users[$user_id - 1];

$reviews = oneReview($current_user['id']);

// dd($reviews);

require __DIR__ . '/../views/profile.php';