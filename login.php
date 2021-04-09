
<!DOCTYPE html>
<html>
<head>
    <title> Login Form in HTML5 and CSS3</title>
    <link rel="stylesheet" a href="css\style.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
 <?php
 require('db.php');
 session_start();
if(isset($_POST['username']))
{
    $username=stripslashes($_REQUEST['username']);
    $username=mysqli_real_escape_string($con,$username);

    $password=stripslashes($_REQUEST['password']);
    $password=mysqli_real_escape_string($con,$password);

    $query="SELECT * FROM `users` WHERE username='$username' and password='$password'";
    $result=mysqli_query($con,$query);
    $rows=mysqli_num_rows($result);
    if($rows==1)
    {
        $_SESSION['username']=$username;
        header("location:Yemekal.php");
    }
    else{
        echo "<div class='form'><h3> Username/password is incorrect. </h3> <br> Click here to <a href='login.php'>Login</a></div>";
    
    }
} else{
    ?>
<div class="form">
<img src="images.jpg"/>
    <h1> Login</h1>
    <form action="" method="POST" name="Login">
    <input class:"username" type="text" name="username" placeholder="Username" required /><br><br>
    <input class:"password" type="password" name="password" placeholder="Password" required /><br><br>
    <input type="submit" name="submit" value="Login" />

    </form>
    <p>Not registered yet? <a href="registeration.php">Register here</a></p>
</div>

<?php }?>
</body>
</html>