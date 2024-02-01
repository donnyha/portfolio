<?php

$slug = 'thankyou';

$title = 'Thank you';


// get users
$users = allUsers();

// get the id of the last inserted data
$insert_id = $_SESSION['insert_id']; 

// since insert_id is starts from 0. index id should be
$index_id = $insert_id - 1;

// declare new user variable
$new_user = $users["$index_id"];

require __DIR__ . '/../views/thankyou.php';