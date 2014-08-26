<?php
//setup password so you only generate when pw is given
$password = "strifedikzak1337";

if ($password != $_GET['password']) {
    die('incorrect password');
}
