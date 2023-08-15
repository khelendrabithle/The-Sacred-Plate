<?php
        $conn=new mysqli('localhost:3306','root','pranavsr141100','sacredplate');
        if(!$conn)
        {
            die('could not connect:'.mysqli_error());
        }
        $u_name = $_POST["txt"]; 
        $u_email = $_POST["email"];
        $u_pswd= $_POST["pswd"];
        $u_cnpd=$_POST['cnfpswd'];
        if($u_pswd==$u_cnpd)
        {
            $statement = $conn->prepare("INSERT INTO register (username, email,password) VALUES(?, ?, ?)"); 
	        $statement->bind_param('sss', $u_name, $u_email, $u_pswd);
	        if($statement->execute()){
		    print "<br> Hello " . $u_name . "!, your message has been saved!<br>You can go to login page.";
            
	    }

        else
        {
		    print $mysqli->error; //show mysql error if any
	    }
        }
        else
        {
            echo"<alert>Password does not match!!</alert>";
        }
    ?>