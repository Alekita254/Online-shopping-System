<?php
session_start();

include('connection.php');
include('function.php');


  if($_SERVER['REQUEST_METHOD']== "POST")
  {

    //Something was posted 
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (! empty($user_name) && ! empty($email) && ! empty($password) && ! is_numeric($user_name))
    {
     
        $query="insert into users ( user_name, email, password) values ('$user_name', '$email', '$password')";

        mysqli_query($con, $query);

        
        header("Location:login.php");
        die;

    }else
    {

        echo "Please enter some valid information !!";
    }

  }

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>contact form</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <section class="user-validation">
        <div class="container">
            <h2 class="text-center">User Validation</h2>
        
        <div class="validation-form">
        <form method="post"><label>Sign_UP</label><br><br>
                <label for="UserName">UserName</label>
                <input type="text"name="user_name" placeholder="Your name goes here..">
 
                <label for="email">Email</label>
                <input type="text"name="email" placeholder="Your email goes here..">

                <label for="password">Password</label>
                <input type="password"name="password" placeholder="Your password goes here..">

                <label>One Click SIGN-UP</label>
                	<ul class="sci">

				<li><a href="#"><img src="../icons/facebook2.ico"></a></li>
				<li><a href="#"><img src="../icons/google.ico"></a></li>
				<li><a href="#"><img src="../icons/yahoo.ico"></a></li>
			</ul>
                <br>
                <input type="submit" value="SIGN UP">
            </form>
        </div>
        <div class="contact-form"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.287366929185!2d37.44631859563253!3d-0.5360812707255367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xae9862c6a6fa2216!2sNational%20Bank%20Embu!5e0!3m2!1sen!2ske!4v1630828876258!5m2!1sen!2ske"
             width="480" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        </div>
    </section>
</body>
</html>