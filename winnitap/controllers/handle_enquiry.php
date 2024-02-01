<?php

$slug = 'handle_enquiry';

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
    }

    // validate first name
    validateString('first_name', $errors);

    // validate last name
    validateString('last_name', $errors);
    
    // validate email
    validateEmail($errors);

    // validate brewery name
    validateString('brewery_name', $errors);
    
    // validate brewery url
    
    // validate description
    validateString('description', $errors);

    // if there are errors in $errors array
    if(count($errors)) {

        // transfer error messages to $_SESSION
        $_SESSION['errors'] = $errors; 

        // transfer post values to $_SESSION
        $_SESSION['post'] = $_POST;

        // reload the page to GET request
        header('Location: ' . '/?page=enquiry');

        // exit loop
        die;
    }
    else {

        // add to database
        $insertId = insertEnquiry($_POST);

        // add flash message
        $_SESSION['flash']['success'] = 'Thank you for sending your enquiry!';

        header('Location: /?page=enquiry');
        die;
    }

    // redirect to GET request
    header('Location: /?page=enquiry');
    die;
}
else {
    die('Invalid request method');
}