<?php

$slug = 'handle_edit_beer';

if('POST' !== $_SERVER['REQUEST_METHOD']) {
    die('Unsupported request method');
}
else {
    updateBeer($_POST, intval($_GET['id']));

    // store flash message in $_SESSION 
    $_SESSION['flash']['success'] = "Successfully edited!";

    header('Location:/?page=admin_dashboard');
    die;
}