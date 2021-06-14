<?php

$slug = 'handle_edit_review';

if('POST' !== $_SERVER['REQUEST_METHOD']) {
    die('Unsupported request method');
}
elseif($_SESSION['is_admin']) {
    updateReview($_POST, $_GET['id']);
    
    // display flash message
    $_SESSION['flash']['success'] = 'Review Successfully edited';

    header('Location:/?page=admin_dashboard');
    die;
}
else {
    updateReview($_POST, $_GET['id']);
    header('Location:/?page=profile');
    die;
}