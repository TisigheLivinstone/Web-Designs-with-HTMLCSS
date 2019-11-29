<?php
    #CRUD:CREATE, UPDATE, AND DELETE


    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];     
        $email = $_POST['email'];


        $connection = mysqli_connect('localhost','root','DREAMBIG','Loginapp');

        if ($connection) {
            echo "Succcessful";
        }else{
            echo "database connection Failed";
        }
        $query = "INSERT INTO user(username,password,email) Values ('$username','$password','$email')";

        $results = mysqli_query($connection, $query);
        if (!$results) {
                echo "QUERY FAILED.mysqli_error()";
            }   
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form Design</title>
        <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
    <div class="loginbox">
        <img src="../../img/user-3.png" class="avater">
        <h1>Login Here</h1>
        <form action="login.php" method="post">
        	<p>
                User Name
        	   <input type="text" name="username" placeholder="input User name" required="">
            </p>
            <p>
                Email
                <input type="email" name="email" placeholder="please Enter Email Here" required="">
            </p>
        	<p>
                Password
        	    <input type="Password" name="password" placeholder="input Password please" required="">
            </p>
        	   <input type="submit" name="submit" value="Login">
        	       <a href="#">Forgot Password?</a><br>
        	       <a href="#">Don't have an account?</a>  
        	
        </form>
    </div>

</body>
</html>