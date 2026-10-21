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
    [$username]);
    $username = pg_fetch_assoc($result);

    if ($username){
        if (password_verify($pass, $username['password'])){
            $_SESSION['username'] = $username['username'];
            header("location: Db.php");
            exit();
        }
    }
    
    }
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        <title>Lab8</title>
    </head>

    <body>
            <form method = "POST">
                <label for="username">Enter your username
                    <input type="text" name="username" required>
                </label>
                <br><br>
                <label for=""password>enter your password
                    <input type="password" name="password" required>
                </label>
                <br><br>
                <button type="submit">Submit</button>
            </form>
            <p style="color:red">
                <?php
                    foreach($ERRORS as $error){
                        echo $error . "<br>";
                    }
                ?>
            </p>
    </body>
</html>


