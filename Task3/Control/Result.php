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
    else{
        echo "First name not valid";
    }

    if(strlen($lastname)>=5)
    {
        echo "Last name : ".$_POST["lastname"];
        echo "<br>";
    }
    else{
        echo "Last name not valid";
    }
    if(strlen($password)>=8)
    {
        echo "Password : ".$_POST["password"];
        echo "<br>";
    }
    else{
        echo "Password not valid";
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

if($_FILES["myfile"]["name"]!==" " && $_FILES["myfile"]["type"]!="jpg" &&  $_FILES["myfile"]["size"]>2097152 )
{
    echo "File is not Valid";
}
else{
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../Files/".$_FILES["myfile"]["name"]))
    {
        echo "File Uploaded";
    }
    else
        echo "Can't uploaded";
}

    

    echo "<br>";
    echo "Email : ".$_POST["email"];
    echo "<br>";
    echo "Age : ".$_POST["age"];
}
?>