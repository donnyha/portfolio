<?php

declare(strict_types=1);

/**
 * Return a sanitized string for all HTML contexts
 *
 * @param string $str
 * @return string
 */
function e(string $str):string  
{
    return htmlentities($str, ENT_QUOTES, "UTF-8");
}

/**
 * Return raw, unsanitized string
 *
 * @param string $str
 * @return string
 */
function raw(string $str):string 
{
    return $str;
}

/**
 * Dump and Die shortcut
 *
 * @param mixed $var
 * @return void
 */
function dd($var, bool $die=true):void 
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if($die) die();
}

/**
 * function for returning basename for the website
 */
function self()
{
    return basename($_SERVER['PHP_SELF']);
}

/**
 * function to log
 *
 * @param   ILogger  $logger
 *
 * @return
 */
function logEvent($logger)
{
    $date = date('Y-m-d H:i:s');
    $request = $_SERVER['REQUEST_METHOD'];
    $path= $_SERVER['REQUEST_URI'];
    $status = http_response_code();
    $userBrowser = $_SERVER['HTTP_USER_AGENT'];

    $event = $date . ' | ' . $request . ' | ' . $path . ' | ' . $status . ' | ' . $userBrowser;
    $logger->write($event);
}