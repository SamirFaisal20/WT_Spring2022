<?php
    include("../model/database.php");
    session_start();
    if(isset($_POST["login"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($_POST["username"]) || empty($_POST["password"]))
        {
            echo "All informations are require";
        }
        else
        {
            $databaseloginobject = new Database();

            $connectopen = $databaseloginobject->openConnection();
            $login = $databaseloginobject->Login($username,$password,$connectopen); 
            
            if($login->num_rows > 0)
            {
                $_SESSION["username"]=$_POST["username"];
                $_SESSION["password"]=$_POST["password"];
                header("location: ../view/profile.php");;
            }
            else
            {
                echo "Login not done";
            }
            $databaseloginobject->ConnectionClose($connectopen);
        }
        
    }
    if(isset($_POST["registration"]))
    {
        header("location: ../view/Registration.php");
    }
?>