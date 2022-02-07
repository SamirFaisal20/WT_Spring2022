<?php
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$age=$_POST["age"];
$email=$_POST["email"];
$password=$_POST["password"];
if($firstname=="" && $lastname=="" && $age=="" && isset($_POST["d"])==false && isset($_POST["language"])==false && $email=="" && $password=="")
{
    echo "All fields are required";
}
else{
    if(strlen($firstname)>=5)
    {
        echo "First name : ".$_POST["firstname"];
        echo "<br>";
    }
    if(strlen($lastname)>=5)
    {
        echo "Last name : ".$_POST["lastname"];
        echo "<br>";
    }
    if(strlen($password)>=8)
    {
        echo "Password : ".$_POST["password"];
        echo "<br>";
    }
    if(isset($_POST["d"]))
    {
        echo "Designation : ".$_POST["d"];
        echo "<br>";
    }
    if(isset($_POST["language1"]) || isset($_POST["language2"]) || isset($_POST["language3"]))
    {
        if(isset($_POST["language1"]))
        {
            echo $_POST["language1"]." ";
        }
        if(isset($_POST["language2"]))
        {
            echo $_POST["language2"]." ";
        }
        if(isset($_POST["language3"]))
        {
            echo $_POST["language3"]." ";
        }
    }
    echo "<br>";
    echo "Email : ".$_POST["email"];
    echo "<br>";
    echo "Age : ".$_POST["age"];
}
?>