<?php
//setup password so you only generate when pw is given
$password = "YourPasswordHere";

if ($password != $_GET['password']) {
    die('incorrect password');
}

//change Json Storage Directory
define("RESOURCEPATH", "Saves/");

//include autoload
require("vendor/autoload.php");
