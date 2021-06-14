<?php

// if there is a POST request
if('POST' === $_SERVER['REQUEST_METHOD']) {

    // get users
    $users = allUsers();

    // create errors array
    $errors = [];

    // foreach loop with $key $value pair in $_POST
    foreach($_POST as $key => $value) {

        // if there are empty input fields
        if(empty($value)) {

            // put respective error messages to errors array
            $errors[$key] = "$key is a required field";
        }
    }// end foreach


    // $validator = new Validator($_POST);

    // first name
    // $validator->string('first_name');

    // $validator->errors();

    // validate first name
    validateString('first_name', $errors);

    // validate last name
    validateString('last_name', $errors);

    // validate email
    validateEmail($errors);

    // validate phone
    validatePhone($errors);

    // validate street
    validateStreet($errors);

    // validate city
    validateString('city', $errors);

    // validate postal code
    validatePostal($errors);

    // validate province
    validateString('province', $errors);

    // validate country
    validateString('country', $errors);

    // validate password
    validatePass($errors);

    // $errors = errors();

    // if there are errors in $errors array
    if(count($errors)) {

        // transfer error messages to $_SESSION
        $_SESSION['errors'] = $errors; 

        // transfer post values to $_SESSION
        $_SESSION['post'] = $_POST;

        // reload the page to GET request
        header('Location: ' . '/?page=registration');

        // exit loop
        die;
    }
    else {

        // to insert post values to users database
        $insert_id = insertUser($_POST);

        // store $last_id in $_SESSION 
        $_SESSION['insert_id'] = $insert_id;

        header('Location: ' . '/?page=thankyou');
        die;
    }

    // redirect to GET request
    header('Location:' . self());
    die;

}// end if
else {
    die('Invalid request method');
}