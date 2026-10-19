<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'login_db';

$conn = new mysql($host, $username, $password, $db_name);

if($conn){
    echo "Yes, This is connected";

} else {
    die("connection error"). connection_aborted;
}

?>
