<?php
//setup password so you only generate when pw is given
$password = "YourPasswordHere";
$_GET['password'] = isset($_GET['password']) ? $_GET['password'] : null;
if (!in_array($password,array($_GET['password'],$argv[1]))) {
    die('incorrect password');
}

//change Json Storage Directory
define("RESOURCEPATH", "Saves/");

//include autoload
require("vendor/autoload.php");

// Twitter auth
$oauthAccessToken = '';
$oauthAccessTokenSecret = '';
$consumerKey = '';
$consumerSecret = '';