<?php

class Validator
{

    // Properties
    protected $errors = [];
    protected $arr = [];

    // Methods

    /**
     * [construct function]
     *
     * @param   [array]  $fields   [field name]
     * @param   [array]  $errors  [array for errors]
     *
     * @return
     */
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    
    /**
     * [function validate last name]
     *
     * @param   [string]  $field   [field name]
     * @param   [array]  $errors  [array for errors]
     *
     * @return
     */
    function validateString($field)
    {
        $value=trim($this->arr[$field] ?? '');
        if(!preg_match("/[A-Za-z0-9\s\'\-\.]{1,}/", $value)) {

            // put invalid last name error to $errors array
            $this->errors[$field] = "Please put valid $field";
        } // end if
    }

    /**
     * [function to validate email]
     *
     * @param   [array]  $errors  [array of user arrays]
     *
     * @return
     */
    public function validateEmail($field) 
    {
        $value=trim($this->arr[$field] ?? '');
        
        // if email does not validate
        if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {

            // put invalid emaill address error to $errors array
            $this->errors[$field] = "Invalid email address";
        }
    }

    public function validateUniqueEmail($field, $user)
    {        
        if($user) {
            // add errors to session 
            $this->errors[$field] = "Email is already in use";
        }
    }
    
    /**
     * [function to validate phone]
     *
     * @param   [array]  $errors  [user errors]
     *
     * @return
     */
    function validatePhone($field) 
    {    
        $value=trim($this->arr[$field] ?? '');
        
        // if phone does not validate
        if(!preg_match("/[0-9]{3}(\s)?-?[0-9]{3}(\s)?-?[0-9]{4}/", $value)) {

            // put invalid phone error to $errors array
            $this->errors[$field] = "Invalid phone number";
        }
    }

    /**
     * [function to validate postal code]
     *
     * @param   [array]  $errors  [user errors]
     *
     * @return
     */
    function validatePostal($field)
    {
        $value=trim($this->arr[$field] ?? '');
        
        // if postal code does not validate
        if(!preg_match("/[A-Z]{1}[0-9]{1}[A-Z]{1} [0-9]{1}[A-Z]{1}[0-9]{1}/", $value)) {

            // put invalid postal code error to $errors array
            $this->errors[$field] = "Invalid postal code";
        }
    }

    /**
     * [function to validate password]
     *
     * @param   [array]  $errors  [user errors]
     *
     * @return
     */
    function validatePassMatch($field, $fieldConfirm)
    {
        $value=trim($this->arr[$field] ?? '');
        $value2=trim($this->arr[$fieldConfirm] ?? '');

        // if password does not match password confirmation
        if($value !== $value2) {

            // put invalid password error to $errors array
            $this->errors[$field] = "Passwords do not match";
        }
    }

    /**
     * returns all errors in an array
     *
     * @return  array
     */
    public function errors()
    {
        return $this->errors;
    }

}