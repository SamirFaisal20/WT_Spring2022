<?php
include("../model/database.php");

    $databaseobject = new Database();

    $connectopen = $databaseobject->openConnection();
    $datastore=$databaseobject->fetch($_SESSION["username"],$connectopen);
    if($datastore->num_rows > 0)
    {
        while($row = $datastore->fetch_assoc())
        {
            $present_add=$row["present_add"];
            $permanent_add=$row["permanent_add"];
            $phone_no=$row["phone_no"];
            $gender=$row["gender"];
            $religion=$row["religion"];
            $email=$row["email"];
        }
    }
    if(isset($_POST["update"]))
    {
        $databaseobject = new Database();
        $connectopen = $databaseobject->openConnection();
        $datastore=$databaseobject->update($_SESSION["username"],$_POST["present_add"],$_POST["permanent_add"],$_POST["religion"],$connectopen);
    }
    $databaseobject->ConnectionClose($connectopen);
?>