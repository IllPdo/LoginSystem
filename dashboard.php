<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $num1 =(int)$_POST["num1"];
    $num2 =(int)$_POST["num2"];

    Switch(isset($post["op"])){
        case 'sum':
            $sum = $num1 + $num2;
            break;
    } Switch(isset($post["op"])){
        case 'sub':
            $sum = $num1 - $num2;
            break;
    } Switch(isset($post["op"])){
        case 'div':
            $sum = $num1 / $num2;
            break;
    } Switch(isset($post["op"])){
        case 'mul':
            $sum = $num1 * $num2;
            break;
    }

}
function calculate($num1, $num2) {

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
                <input type = "text" name="num1">
                <br><br>
                <input type="text" name="num2">
                <br><br>
                <select name="op" id="">
                    <option value="sum">Add</option>
                    <option value="subtract">Subtract</option>
                    <option value="Division"
                </select>
                <button type="submit">calculator</button>
            </form>
    </body>
</html>
