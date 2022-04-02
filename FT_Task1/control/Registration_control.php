<?php
    
    include("../model/database.php");
    if(isset($_POST["Registration"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $present_add = $_POST["presentaddress"];
        $parmanent_add = $_POST["permanentaddress"];
        $phoneno = $_POST["phoneNo"];
        $gender = $_POST["gender"];
        $religion = $_POST["religion"];
        $email = $_POST["email"] ;

        if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["presentaddress"]) || empty($_POST["permanentaddress"]) || empty($_POST["phoneNo"]) ||
        empty($_POST["religion"]) || empty($_POST["email"]) || empty($_POST["gender"]))
        {
            echo "All Information Require";
            echo "<br>";
        }
        else
        {
            if(!preg_match ("/^[a-zA-z]*$/",$_POST["username"]))
            {
                echo "Only contain letter";
                echo "<br>";
                if(strlen($_POST["password"])<=5)
                {
                    echo "Password must be greater than 5";
                    echo "<br>";
                }
                if(strlen($_POST["phoneNo"])!=11)
                {
                    echo "Phone Number must be 11 digit";
                    echo "<br>";
                }
                if(!isset($_POST["gender"]))
                {
                    echo "Select gender ";
                    echo "<br>";
                    
                }
                
                if(!isset($_POST["religion"]) && $_POST["religion"]!='Islam' && $_POST["religion"]!='Hindu'&& $_POST["religion"]!='Other')
                {
                    echo "select Religion";
                    echo "<br>";
                }
                if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
                {
                    echo "enter correct email address";
                    echo "<br>";
                }
            }
            
            elseif(preg_match ("/^[a-zA-z]*$/",$_POST["username"]) || strlen($_POST["password"])>5 || strlen($_POST["phoneNo"])==11 || isset($_POST["gender"]) ||
            /*isset($_POST["education1"]) || isset($_POST["education2"]) || isset($_POST["education3"]) ||*/ isset($_POST["religion"]) && $_POST["religion"]=='Islam' && 
            $_POST["religion"]=='Hindu' && $_POST["religion"]=='Other' || filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
            {
                $databaseobject = new Database();

                $connectopen = $databaseobject->openConnection();
                $databaseobject->Insertdata($username,$password,$present_add,$parmanent_add,$phoneno,$gender,$religion,$email,$connectopen);
                $databaseobject->ConnectionClose($connectopen);
            }
        }
    }
    if(isset($_POST["login"]))
    {
        header("location: ../view/login.php");
    }

?>