<?php

$slug = 'delete_beer';

// dd($_GET['id']);

if(deleteBeer($_GET['id'])) {
    $_SESSION['flash']['success'] = 'Beer successfully deleted';
    header('Location:/?page=admin_dashboard');
    die;
}
elseif(!deleteBeer($_GET['id'])){
    die('Problem deleteing beer');
}