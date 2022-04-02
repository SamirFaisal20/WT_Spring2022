<?php
session_start();
include("../control/profile_control.php");
if(!isset($_SESSION["username"]))
{
    header("location: Login.php");
}
setcookie("Login","FinalTermLab",time()+(86400*30),"/");
    $point="";
    if(isset($_COOKIE["Login"]))
    {
        $point=1;
    }
    if($point==1)
    {
        echo "You are visiting me before";
        echo "<br>";
    }
    
    else{
        echo"You are visiting me first time. Thank you!!";
        echo "<br>";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION["username"]; ?></h1>
    <hr>
    <a href="../control/logout.php">logout</a><br>
    <form action="" method="post">
        <table>
            <tr>
                <td> Name : </td>
                <td><input type="text" value="<?php echo $_SESSION["username"]; ?>"></td>
            </tr>
            <tr>
                <td>Peresnt Address : </td>
                <td><input type="text" name="present_add" value="<?php echo $present_add; ?>"></td>
            </tr>
            <tr>
                <td>Permanent Address : </td>
                <td><input type="text" name="permanent_add" value="<?php echo $permanent_add;?>"></td>
            </tr>
            <tr>
                <td>Phone Number : </td>
                <td><input type="text" name="phone_no" value="<?php echo $phone_no; ?>"></td>
            </tr>
            <tr>
                <td>Gender : </td>
                <td><input type="text" name="gender" value="<?php echo $gender; ?>"></td>
            </tr>
            <tr>
                <td>Religion : </td>
                <td><input type="text" name="religion" value="<?php echo $religion; ?>"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
    
</body>
</html>