<?php
session_start();

$username = "Will";
$pass = "perez";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    if(EMPTY($username)){
        $ERRORS[] = "Username is required";

    }

    $result = pg_query_params($conn, 'SELECT * FROM users WHERE username =$1',
    [$username])
}


session_destroy();

header("Location: index.php");
exit();

?>