<?php

require realpath(__DIR__ . '/../App/Lib/config.php');

$allowed = array(
    'index',
    'beer',
    'show',
    'brewery',
    'enquiry',
    'registration',
    'handle_registration',
    'handle_review',
    'thankyou',
    'login',
    'process_login',
    'profile',
    'logout',
    'edit_review',
    'handle_edit_review',
    'delete_review',
    'admin_dashboard',
    'create_beer',
    'edit_beer',
    'handle_edit_beer',
    'delete_beer',
    'search',
    'search_admin',
    'handle_enquiry'
);

// if no page defined, set page to home (default)
if(empty($_GET['page'])) {
    $page = 'index';
} 
else {
    $page = $_GET['page'];
}

// Make sure provided page is allowed
if(!in_array($page, $allowed)) {
    die('404 - Page Not Found');
}

require __DIR__ . '/../controllers/' . $page . '.php';