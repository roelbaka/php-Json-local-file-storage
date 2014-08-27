<?php
//setup password so you only generate when pw is given
$password = "strifedikzak1337";

if (!in_array($password,array($_GET['password'],$argv[1]))) {
    die('incorrect password');
}
