<?php

// if request method = post
if('POST' === $_SERVER['REQUEST_METHOD']) {
    
    // test if user provided username and password
    if(empty($_POST['username']) || empty($_POST['password'])) {
        
        // add errors 
        $errors['password'] = 'All fields are required';

        // add errors to session
        $_SESSION['errors'] = $errors;

        // redirect to login page
        header('Location:/?page=login');
        die;
    }

    // add post id to posts array
    $posts['username'] = $_POST['username'];
    $_SESSION['post'] = $posts;

    // test if username exists
    $user = getUsername($_POST['username']);

    // test if username is admin
    $admin = isAdmin($user['id']);

    // dd($admin['is_admin']);
    
    // if the username exists in the database
    if($user) {

        // if form password matches database password
        if(password_verify($_POST['password'], $user['password'])) {

            // log the user in
            $_SESSION['logged_in'] = true; 

            // set username in session
            $_SESSION['user'] = $user['username'];

            // get user's user_id
            $user_id = getUserId($user['username']);

            // add user_id to session
            $_SESSION['user_id'] = $user_id['id'];

            // get user's first name
            $user_firstname = $user['first_name'];
            
            // welcome flash message
            $_SESSION['flash']['success'] = "Welcome back! $user_firstname";

            // if the user is an admin user
            if($admin['is_admin'] === '1') {

                //add admin to session
                $_SESSION['is_admin'] = $admin['is_admin'];

                // redirect to admin dashboard
                header('Location:/?page=admin_dashboard');
                die;
            }

            // redirect to profile
            header('Location:/?page=profile');
            die;
        }
        // if form password does not match database password
        else {
            $_SESSION['flash']['danger'] = 'Oops, something went wrong';

            $errors['password'] = 'Incorrect username/password';
            $_SESSION['errors'] = $errors;

            // redirect to profile
            header('Location:/?page=login');
            die;
        }
    }
    else {
        // if credentials don't exist in the db
        $_SESSION['flash']['danger'] = 'Oops, something went wrong';

        $errors['password'] = 'Incorrect username/password';
        $_SESSION['errors'] = $errors;

        // redirect to login
        header('Location:/?page=login');
        die;
    }
}
else {
    die('Invalid request method');
}