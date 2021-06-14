<?php

// if there is not $_POST data being passed through
if(empty($_POST)) {
    $_SESSION['flash']['danger'] = 'Please write a review';
    header('Location: /?page=beer');
    die;
}

// if the user is not logged in
if(empty($_SESSION['logged_in'])) {
    $_SESSION['flash']['danger'] = 'You need to be logged in to leave a reivew';
    header('Location: /?page=login');
    die;
}

// dd($_GET);

// if the request method of post
if('POST' === $_SERVER['REQUEST_METHOD']) {
    // errors array
    $errors = [];

    // foreach loop with $key $value pair in $_POST
    foreach($_POST as $key => $value) {

        // if there are empty input fields
        if(empty($value)) {

            // put respective error messages to errors array
            $errors[$key] = "$key is a required field";
        }
    }// end foreach

    // validate title
    validateString('title', $errors);

    // validate review
    validateString('review', $errors);

    // if there are errors in $errors array
    if(count($errors)) {

        // transfer error messages to $_SESSION
        $_SESSION['errors'] = $errors; 

        // transfer post values to $_SESSION
        $_SESSION['post'] = $_POST;

        // reload the page to GET request
        header('Location: ' . '/?page=show&id=' . $_SESSION['beer_id']);

        // exit loop
        die;
    }
    else {
        // convert rating to integer
        $_POST['rating'] = intval($_POST['rating']);

        // get correct user_id
        $_POST['user_id'] = intval($_SESSION['user_id']);

        // get current beer id
        $_POST['beer_id'] =intval($_SESSION['beer_id']);

        // brewery id
        $brewery_id = intval($_GET['brewery_id']);

        // add review to the database
        addReview($_POST, $brewery_id);

        // redirect to user profile
        header('Location: /?page=profile');
        die;
    }

}