<?php

/**
 * displaying error messages below each fields
 *
 * @param   [type]  $field   [name of the field]
 * @param   [type]  $errors  [array with all errors]
 *
 * @return  [string]           [error message]
 */
function eMessage($field, $errors) 
{
    if(!empty($errors[$field])) {

        return "<br /><span class='error_message'>{$errors[$field]}</span>";
    }
}

/**
 * [checking for email duplication]
 *
 * @param   [string]  $email  [submitted email address]
 *
 * @return
 */
function getEmail($email) 
{
    global $dbh;

    $query = 
    "SELECT * FROM users
    WHERE email = :email LIMIT 1    
    ";

    $stmt = $dbh->prepare($query);

    $params = array (
        ':email' => $email
    );

    $stmt->execute($params);
    return $stmt->fetch();
}

/**
 * [checking for username duplication]
 *
 * @param   [string]  $username  [submitted email address]
 *
 * @return
 */
function getUsername($username) 
{
    global $dbh;

    $query = 
    "SELECT * FROM users
    WHERE username = :username LIMIT 1    
    ";

    $stmt = $dbh->prepare($query);

    $params = array (
        ':username' => $username
    );

    $stmt->execute($params);
    return $stmt->fetch();
}

/**
 * [getting user id]
 *
 * @param   [string]  $username  [submitted email address]
 *
 * @return
 */
function getUserId($username) 
{
    global $dbh;

    $query = 
    "SELECT 
    id
    FROM users
    WHERE username = :username    
    ";

    $stmt = $dbh->prepare($query);

    $params = array (
        ':username' => $username
    );

    $stmt->execute($params);
    return $stmt->fetch();
}

/**
 * function to check if the user is admin or not
 *
 * @param   string  $id  user id
 *
 * @return
 */
function isAdmin(string $id)
{
    global $dbh;

    $query = "SELECT
    is_admin
    FROM users
    WHERE id = :id
    ";

    $stmt = $dbh->prepare($query);

    $params = array (
        ':id' => $id
    );

    $stmt->execute($params);

    return $stmt->fetch();
}

/**
 * [function validate last name]
 *
 * @param   [string]  $field   [field name]
 * @param   [array]  $errors  [array for errors]
 *
 * @return
 */
function validateString($field, &$errors)
{
    if(!empty($_POST[$field])){
        if(!preg_match("/[A-Za-z\n'-.]/", $_POST[$field]) || strlen($_POST[$field]) > 255) {

            // put invalid last name error to $errors array
            $errors[$field] = "Please put valid $field";
        }
    } // end if
}

/**
 * [function to validate email]
 *
 * @param   [array]  $errors  [array of user arrays]
 *
 * @return
 */
function validateEmail(&$errors) 
{
    // if the user provided email address
    if(!empty($_POST['email'])){

        // test for duplicate email
        $user = getEmail($_POST['email']);

        // if the email address is duplicate
        if($user) {
            // add errors to session 
            $errors['email'] = 'Email is already in use'; 
        }
        
        // if email does not validate
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || strlen($_POST['email']) > 255) {

            // put invalid emaill address error to $errors array
            $errors['email'] = "Invalid email address";
        }
    } // end if
}

/**
 * [function to validate phone]
 *
 * @param   [array]  $errors  [user errors]
 *
 * @return
 */
function validatePhone(&$errors) 
{
    if(!empty($_POST['phone'])){
            
        // if phone does not validate
        if(!preg_match("/[0-9]{3}(\s)?-?[0-9]{3}(\s)?-?[0-9]{4}/", $_POST['phone']) || strlen($_POST['phone']) > 255) {

            // put invalid phone error to $errors array
            $errors['phone'] = "Invalid phone number";
        }
    } // end if
}

/**
 * [function to validate phone]
 *
 * @param   [array]  $errors  [user errors]
 *
 * @return
 */
function validateURL($field, &$errors) 
{
    if(!empty($_POST[$field])){
            
        // if phone does not validate
        if(!preg_match("/(www).?[A-Za-z0-9\-\.].[a-z]/", $_POST[$field]) || strlen($_POST[$field]) > 255) {

            // put invalid phone error to $errors array
            $errors['phone'] = "Invalid URL";
        }
    } // end if
}

/**
 * [function to validate street]
 *
 * @param   [array]  $errors  [user errors]
 *
 * @return
 */
function validateStreet(&$errors)
{
    if(!empty($_POST['street'])){
            
        // if street does not validate
        if(!preg_match("/[0-9]\s[A-Za-z]/", $_POST['street']) || strlen($_POST['street']) > 255) {

            // put invalid street error to $errors array
            $errors['street'] = "Please put valid street address";
        }
    } // end if
}

/**
 * [function to validate postal code]
 *
 * @param   [array]  $errors  [user errors]
 *
 * @return
 */
function validatePostal(&$errors)
{
    if(!empty($_POST['postal_code'])){
            
        // if postal code does not validate
        if(!preg_match("/[A-Z]{1}[0-9]{1}[A-Z]{1} [0-9]{1}[A-Z]{1}[0-9]{1}/", $_POST['postal_code']) || strlen($_POST['password']) > 255) {

            // put invalid postal code error to $errors array
            $errors['postal_code'] = "Invalid postal code";
        }
    } // end if
}

/**
 * [function to validate password]
 *
 * @param   [array]  $errors  [user errors]
 *
 * @return
 */
function validatePass(&$errors)
{
    if(!empty($_POST['password'])) {

        // if password does not match password confirmation
        if($_POST['password'] !== $_POST['password_confirm'] || strlen($_POST['password']) > 255) {

            // put invalid password error to $errors array
            $errors['password'] = "Passwords do not match";
        }
    } // end if
}

/**
 * validate integer
 *
 * @param   string  $field   field name
 * @param   array  $errors   errors array
 *
 * @return
 */
function validateInt($field, &$errors)
{
    if(!empty($_POST[$field])) {
        if(!preg_match("/[0-9].?/", $_POST[$field]) || strlen($_POST[$field]) > 255) {

            // put invalid street error to $errors array
            $errors[$field] = "Please put valid number";
        }
    }
}

/**
 * [function to logout the user]
 *
 * @param   [array]  $session  [$_SESSION]
 *
 * @return
 */
function logout() {

    $_SESSION = [];
    session_regenerate_id();

    $_SESSION['flash']['success'] = 'You have logged out';
    
    header('Location:/?page=login');
    die;
}