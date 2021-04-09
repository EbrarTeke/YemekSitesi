<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
   <?php
   require('db.php');
   if(isset($_POST['username']))
   {
       $username=stripslashes($_REQUEST['username']);
       $username=mysqli_real_escape_string($con,$username);

       $email=stripslashes($_REQUEST['email']);
       $email=mysqli_real_escape_string($con,$email);
   
       $password=stripslashes($_REQUEST['password']);
       $password=mysqli_real_escape_string($con,$password);
       
       $trn_date=date("Y-m-d H:i:s");

       $query="INSERT INTO `users`(username,email,password,trn_date) VALUES ('$username','$email','$password','$trn_date')";
       $result=mysqli_query($con,$query);

       if($result)
       {
           echo "<div class='form'><h3>You are registered successfully. </h3><br> Click here to<a href='login.php'>Login</a></div>";
       }
     }else{
           ?>
        <div class="form">
        <img src="images.jpg"/>
            <h1>Registeration</h1>
            <form name="registeration" action="" method="POST">
            <input type="text" name="username" placeholder="Username" required /><br><br>
            <input type="email" name="email" placeholder="Email" required /><br><br>
            <input type="password" name="password" placeholder="Password" required /><br><br>

             <input type="submit" name="submit" value="Register" />
            </form>
            <p>Do you have an account? <a href="login.php">Log In</a></p>
        </div>
     <?php }?>

   
   
</body>
</html>