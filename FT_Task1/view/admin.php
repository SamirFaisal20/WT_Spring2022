<?php
session_start();
setcookie("admin","FinalTermLab",time()+(86400*30),"/");
    $point="";
    if(isset($_COOKIE["admin"]))
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
<html lang="en">
<head>
    <title>Admin</title>
</head>
<body>
    Admin page
    <hr>
    <form action="" method="post">
        <input type="text" name="textsearch">
        <input type="submit" name="search" value="Search">
    </form>
</body>
</html>
<?php
include("../control/admin_control.php");
?>