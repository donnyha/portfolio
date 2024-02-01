<?php

$slug = 'delete_review';

// dd($_GET['id']);

if(!deleteReview($_GET['id'])) {
    die('Problem deleteing review');
}
elseif($_SESSION['is_admin']) {
    deleteReview($_GET['id']);

    // display flash message
    $_SESSION['flash']['success'] = 'Review Successfully deleted';

    header('Location:/?page=admin_dashboard');
    die;
}
else {
    header('Location:/?page=profile');
    die;
}