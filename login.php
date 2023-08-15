<?php
        $conn=new mysqli('localhost:3306','root','12345678','sacredplate');
        if(!$conn)
        {
            die('could not connect:'.mysqli_error());
        } 
        $u_username = $_POST["username"];
        $u_pswd= $_POST["pswd"];
        $query="select count(username) from register where username='$u_username' and password='$u_pswd'";
        $result=$conn->query($query);
        if($result->num_rows>0)
        {
            header('Location:index.html');
        }
        else
        {
            echo"<alert>Login Unsuccessful</alert>";
        }
        ?>

        

