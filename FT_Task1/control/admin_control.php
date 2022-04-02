<?php
include("../model/database.php");
$username=$present_add=$permanent_add=$phone_no=$gender=$religion=$email="";
if(isset($_POST["search"]))
{
    $databaseobject = new Database();
    $connectopen = $databaseobject->openConnection();
    $datastore=$databaseobject->searchUser($_POST["textsearch"],$connectopen);
    if($datastore->num_rows > 0)
    {
        while($row = $datastore->fetch_assoc())
        {
            echo "Name :". $row["username"]."<br>";           
            echo "Peresnt Address : ".   $row["present_add"]."<br>";      
            echo "Permanent Address : ".$row["permanent_add"]."<br>";
            echo "Phone Number : ". $row["phone_no"]."<br>";     
            echo "Gender : ". $row["gender"]."<br>";        
            echo "Religion : ".  $row["religion"]."<br>";        
            echo "Email : ". $row["email"]."<br>";   
        }
    }
    else 
    {
        echo "No data found";
        echo "<br>";
    } 
}
?>