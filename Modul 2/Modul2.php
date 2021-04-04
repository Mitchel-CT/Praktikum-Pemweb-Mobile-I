<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" name="Login_Form">
    <table>
        <tr>
        <td><h3>Login</h3></td>
        </tr>
        <tr>
        <td>Username : </td>
        <td><input name="username" type="text" placeholder="Username"></td>
        </tr>
        <tr>
        <td>Password : </td>
        <td><input name="password" type="text" placeholder="Password" ></td>
        </tr>
        <tr>
        <td> </td>
        <td><input name="Submit" type="submit" value="Login"></td>
        </tr>
    </table>
    </form>
</body>
</html>


<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = false;

        if($user>7){
            echo ("Error: Username harus lebih dari 7 huruf<br>");
            $x = true;
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "Error: Password harus mengandung 1 huruf kapital<br>";
            $x = true;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "Error: Password harus mengandung 1 huruf kecil<br>";
            $x = true;
        }
        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "Error: Password harus mengandung 1 special character<br>";
            $x = true;      
        }
        if (!preg_match("/[0-9]/", $password)) {
            echo "Error: Password harus mengandung 1 digit<br>";
            $x = true;
        }
        if($pass>10){
            echo "Error: Password harus lebih dari 10<br>";
            $x = true;
        }
        if( $x == false ){
            echo "Login berhasil";
        }
    }
?>
