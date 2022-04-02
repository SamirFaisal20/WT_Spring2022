<?php
    class Database
    {
        //database connection function
        function openConnection()
        {
            $databasehost = "localhost";
            $databaseUser = "root";
            $databasepassword = "";
            $databasename = "finaltermtask1";
            $connection = new mysqli($databasehost,$databaseUser,$databasepassword,$databasename);

            if($connection->connect_error)
            {
                echo "Can't Connect yet";
            }
            return $connection;
        }
        // query execution function 
        function Insertdata($username,$password,$presentadd,$permanentadd,$phoneno,$gender,$religion,$email,$connection)
        {
            $sql = "INSERT INTO task1 (username,pass_word,present_add,
            permanent_add,phone_no,gender,religion,email) VALUES
            ('$username','$password','$presentadd','$permanentadd',$phoneno,'$gender','$religion','$email')";

            if($connection->query($sql))
            {
                echo "Record Inserted";
            }
            else
            {
                echo "Can't Insert".$connection->error;
            }
        }
        // login function
        function Login($username,$password,$connection)
        {
            $sql = "SELECT * from task1 WHERE username = '$username' AND pass_word ='$password'";
            $login= $connection->query($sql);
            return $login;
            
        }
        //see the login in user information
        function fetch($username,$connection)
        {
            $sql = "SELECT username,present_add,permanent_add,phone_no,gender,religion,email from task1 where username='$username'";
            $execution = $connection->query($sql);
            return $execution;
        }
        //search user
        function searchUser($username,$connection)
        {
            $sql="SELECT username,present_add,permanent_add,phone_no,gender,religion,email from task1 where username='$username'";
            $execution = $connection->query($sql);
            return $execution;
        }
        function update($username,$presentadd,$permanentadd,$religion,$connection)
        {
            $sql="UPDATE task1 set present_add='$presentadd',permanent_add='$permanentadd',religion='$religion' where username='$username'";
            if($connection->query($sql))
            {
                echo "Information Updated";
            }
            else
            {
                echo "Information don't update";
            }
        }
        // Connection Close
        function ConnectionClose($connection)
        {
            $connection->close();
        }
    }
    

?>