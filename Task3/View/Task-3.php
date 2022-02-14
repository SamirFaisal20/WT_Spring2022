<?php
include "../Control/Result.php";

?>
<html>
    <head>
    </head>
    <body>
        <h2><b>Registration form</b></h2>
        <hr>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="firstname"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lastname"></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="number" name="age"></td>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td><input type="radio" name="d" value="Junior Programmer">Junior Programmer
                    <input type="radio" name="d" value="Senior Programmer">Senior Programmer
                    <input type="radio" name="d" value="Project Lead">Project Lead
                    </td>
                </tr>
                <tr>
                    <td>Peferred language:</td>
                    <td><input type="checkbox" name="language1" value="JAVA">JAVA
                    <input type="checkbox" name="language2" value="PHP">PHP
                    <input type="checkbox" name="language3" value="C++">C++
                    </td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Please choose a file</td>
                    <td><input type="file" name="myfile"></td>
                </tr>
            </table>
                <input type="submit" name ="submir" value="Submit">
                <input type="submit" value="Reset">
        </form>
       
        
    </body>

</html>