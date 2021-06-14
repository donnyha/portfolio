<?php

$slug = 'create_beer';

// if request method is post
if('POST' === $_SERVER['REQUEST_METHOD']) {

    // initialise errors
    $errors = [];

    // dd($_POST['gluten_free']);

    // foreach loop with $key $value pair in $_POST
    foreach($_POST as $key => $value) {

        // if there are empty input fields
        if(trim(strlen($value)) == 0) {

            // put respective error messages to errors array
            $errors[$key] = "$key is a required field";
        }
    }// end foreach

    // validate name
    validateString('name', $errors);

    // validate flavour
    validateString('flavour', $errors);
    
    // validate grain
    validateString('grain', $errors);

    // validate alcohol %
    validateInt('alcohol_percentage', $errors);

    // validate description
    validateString('description', $errors);
    
    // validate price
    validateInt('price', $errors);

    // validate amount
    validateInt('amount', $errors);

    // validate image
    $file = $_FILE['beer']['tmp_name'];

    $fileinfo = getimagesize($file);

    $image = $fileinfo['image'];

    $allowed = array(
        'image/png',
        'image/gif',
        'image/jpg',
        'image/jpeg',
        'image/webp'
    );

    if(in_array($image, $allowed)) {

        $to = __DIR__ . '/uploads/' . $_FILES['beer']['name'];

        $from = $_FILES['beer']['tmp_name'];
        
        if(file_exists($to)) {
            $_SESSION['error'] = 'File already exists!';
        } 
        else {
            if(!move_uploaded_file($from, $to)) {
                $_SESSION['error'] = 'There was a problem uploading the file';
            } 
        }
    }
    else {

        $_SESSION['error'] = 'Must be valid image';
    }

    // dd($_POST);

    // if there are errors in $errors array
    if(count($errors)) {

        // transfer error messages to $_SESSION
        $_SESSION['errors'] = $errors; 

        // transfer post values to $_SESSION
        $_SESSION['post'] = $_POST;

        // put redirect message to session
        $_SESSION['is_redirect'] = true;

        // reload the page to GET request
        header('Location: ' . '/?page=admin_dashboard');

        // exit loop
        die;
    }
    else {

        // dd($_POST);

        // to insert post values to users database
        addBeer($_POST);

        // remove is_redirect from the session
        $_SESSION['is_redirect'] = '';

        // store flash message in $_SESSION 
        $_SESSION['flash']['success'] = 'Beer successfully added!';

        header('Location: ' . '/?page=admin_dashboard');
        die;
    }

    // redirect to GET request
    header('Location:' . self());
    die;
}
else {
    die('Invalid request method');
}