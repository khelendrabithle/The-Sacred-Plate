<!DOCTYPE html>
<html lang="en">
<head>
  <title>FeedBack</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/2157336164.js" crossorigin="anonymous"></script>
  <style>
      .navbar
      { 
        display: flex;
        justify-content: center;
        padding: 0;
        margin: 0;
        list-style-type: none;
        background-color:#212121 ;
        font-family: "Drama Regular"; 
        height: 70px;
      }
      .navbar ul li
      {
        display: inline-block;
      }
      .navbar ul li a
      {
        color: white;
        text-decoration: none;
        text-transform: uppercase;
        display: block;
        padding: 25px 20px;
        font-size: 13px;
        letter-spacing: 5px;
        transition-duration:0.5s;
      }
      .navbar ul li a:hover
      {
        color:lightblue;
      }
      h1{
          text-align: center;
          margin-top: 20px;
          text-shadow: 2px 2px 5px gray;
        }
      div.jumbotron{
        background:url('images/recipebg3.jpg'); 
          box-shadow: 4px 4px 4px 4px gray;
        }
      form {
            background-color: #fff;
            max-width: 700px;
            margin: 0px auto;
            height: 1400px;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
        label {
            font-size: 20px;
			display: block;
		}
        input 
        #hello,#name,#email,#mob,#dob{
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            display: block;
            width: 95%;
        }
        div .suggest1
        {
            float: left;
            width: 50%;
            margin-bottom: 20px;
        }
        div .suggest2
        {
            float: right;
            width: 50%;
            margin-bottom: 20px;
            height: 118px;
        }
        button {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			font-size: 21px;
			display: block;
			width: 100%;
			margin-top: 20px;
            margin-bottom: 35px;
		}
      p{
          font-family: arial rounded mt bold;
          font-size: 20px;
          line-height: 30px;
      }
      footer{
          background-color: black;
          color: aliceblue;

        width: 100%;
        height: 80px;
          bottom: 0;
        margin: 0 auto;
        text-align: center;
      }
      i{
          color: aliceblue;
          padding-left: 10px;
      }
      .php{
        color: red;
      }
  </style>
</head>
<body>
  <div class="navbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="recipes.html">Recipe</a></li>
      <li><a href="aboutus.html">About</a></li>
      <li><a href="contact.html">Contact Us</a></li>
      <li><a href="feedback.html">Feedback</a></li>
    </ul>
  </div>
<h1>
    FEEDBACK
</h1>
<div class="container">
  <div class="jumbotron"> 
    <h2 style="text-align: center;color: aliceblue;">
        THE SACRED PLATE
    </h2><br>
    <h3 style="text-align: center;color: aliceblue;">Please leave us a feedback!We are happy to hear from you.</h3>
    <br>
    <form action="feedback.php" name="myForm" id="form" method="post">
        <center>
        <label>Name</label><br>
        <input type="text" name="name" id="name" placeholder="Enter your Name here">
        <p class="php">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
          if(empty($_POST["name"]))
          {
              echo "(Name is Required Field)<br>";
          }
          else
          {
              $name = ($_POST["name"]);
              if(!preg_match("/^[a-zA-z ]*$/",$name))
              {
                  echo "Check the Name again!<br>";
              }
          }
        }
        ?>
        </p>
        <hr>

        <label>E-mail</label><br>
        <input type="email" name="email" id="email" placeholder="Enter your Email-id here">
        <p class="php">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
        if(empty($_POST["email"]))
        {
            echo "(Email is Required Field)<br>";
        }
        else
        {
            $email = ($_POST["email"]);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $emailerr = "Invalid Format for Email<br>";
                echo $emailerr;
            }
        }
      }
        ?>
        </p>
        <hr>

        <label>Mobile No.</label><br>
        <input type="text" name="mob" id="mob" placeholder="Enter your Mobile number here">
        <p class="php">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
          $mob = ($_POST["mob"]);
        if(strlen($mob)!=10 && !preg_match("/[^0-9]/",$mob))
        {
            echo "Please check the mobile number!<br>";
        }
        }
        ?>
        </p>
        <hr>

        <label>Date of Birth</label><br>
        <input type="date" name="dob" id="dob" placeholder="Enter your Date of Birth">
        <p class="php">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
          $date = ($_POST["dob"]);
        if(empty($date))
        {
            echo "Enter the date please!";
        }
        }
        ?>
        </p>
        <hr>

        <div class="suggest1">
            <p>Did you like our blog?</p>
            <input type="radio" name="a" value="Yes">Yes<br>
            <input type="radio" name="a" value="No">No<br>
            <input type="radio" name="a" value="Maybe">Maybe<br>
            <p class="php">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
          if(!isset($_POST["a"]))
          {
            echo "Please tell us whether you liked our blog or not.<br>";
          }
          else
          {
            $a=($_POST["a"]);

          }
        }
        ?>
        </p>
        </div>
        
        <div class="suggest2">
            <p>Which recipe you liked the most?</p>
            <select name="liked_recipe">
                <option value="-1">[Select]</option>
                <option>Pav-Bhaji</option>
                <option>Chicken Biryani</option>
                <option>Schezwan Rice</option>
                <option>Tomato Rice</option>
                <option>Matar Paneer</option>
                <option>Masala Bhindi</option>
                <option>Dhokla</option>
                <option>Idli-Sambar</option>
                <option>Masala Dosa</option>
                <option>Gulab Jamun</option>
                <option>Rasgulla</option>
                <option>Aamrakhand</option>
                <option>Paneer Tikka</option>
                <option>Dal Tadka</option>
                <option>Jeera Rice</option>
                <option>Paneer Biryani</option>
            </select>
        </div>
        <br><br>
        <label>Any Suggestions?</label><br>
        <textarea cols="60" rows="6" name="sug"></textarea>
        <br><br>
        <hr>
        <a href="Thanks.html"><button type="submit" value="submit" name="submit" onclick="">
			Submit
		</button></a>

        <img src="images/feedback.jpg" height="250px">

    </center>
  </form>
    
  </div>   
</div>
<footer>
    The Sacred Plate  |  Follow us at:
        <a href="https://www.facebook.com/"><i class="fab fa-2x fa-facebook-square"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-2x fa-instagram"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-2x fa-twitter"></i></a>
        <br><br>

        <a href="#">Privacy Policy</a> &ensp;&ensp;&ensp;
        <a href="#">Terms</a>
</footer>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $submit = ($_POST["submit"]);
  $mysqli = new mysqli('localhost:3306','root','pranavsr141100','sacredplate');

  if($mysqli)
  {
    $query = $mysqli->prepare("Insert into feedback values(?,?,?,?,?,?,?)");
    $query->bind_param('ssissss',$_POST['name'],$_POST['email'],$_POST['mob'],$_POST['dob'],$_POST['a'],$_POST['liked_recipe'],$_POST['sug']);
    if($query->execute())
    {
      echo "<script>alert('Thank You for giving your feedback!')</script>";
    }
  }
  else
  {
    //echo "Not Connected!";
  }
}
?>
</body>
</html>