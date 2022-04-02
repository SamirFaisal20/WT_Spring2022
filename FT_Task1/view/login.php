<?php
    include "../control/login_control.php";
    if(isset($_SESSION["username"]))
    {
        header("location: profile.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
</head>
<body>
    <h2><b>Login</b></h2>
    <hr>
    
    <form action="" method="post">
        <table>
            <tr>
                <td>User name : </td>
                <td><input type="text" placeholder="Enter your user name" name="username"></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" placeholder="Enter your Password" name="password"></td>
            </tr>
        </table>
        <input type="submit" value="Login" name="login">
        <input type="submit" value="Create New Account" name="registration">
    </form>
</body>
</html>