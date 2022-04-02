<?php
    include("../control/Registration_control.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration page</title>
</head>
<body>
    <h2><b>Registration</b></h2>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Username :</td>
                <td><input type="text" placeholder="Enter username" name="username"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" placeholder="Enter password" name="password"></td>
            </tr>
            <tr>
                <td>Present Address :</td>
                <td><input type="text" placeholder="Enter present address" name="presentaddress"></td>
            </tr>
            <tr>
                <td>Permanent Address :</td>
                <td><input type="text" placeholder="Enter permanent address" name="permanentaddress"></td>
            </tr>
            <tr>
                <td>Phone No :</td>
                <td><input type="text" placeholder="Enter phone number" name="phoneNo"></td>
            </tr>
            <tr>
                <td>Gender :</td>
                <td><input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                </td>
            </tr>
            <tr>
                <td>Select Religion :</td>
                <td>
                <select name="religion" id="religion">
                    <option value="">Select your religion</option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Other">Other</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>E-mail :</td>
                <td><input type="text" placeholder="Enter email address" name="email"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Registration" name="Registration">
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>