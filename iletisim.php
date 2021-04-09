<?php
require('db.php');
include("auth.php");
$status="";
if(isset($_POST['new'])&& ($_POST['new']==1))
{
    $name=$_REQUEST['name'];
    $mail=$_REQUEST['email'];
    $task=$_SESSION['task'];
    $message=$_SESSION['message'];

    $ins_query="INSERT INTO `comment`(name,mail,task,message)VALUES ('$name','$email', '$task','$message')";
    mysqli_query($con,$ins_query);
    $status="New record insearted seccssefully.<br><br><a href='view.php'> View insearted record</a>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	 <link rel="stylesheet" a href="css\style.css">
	 <title>YemekAl.com</title>
</head>
<body  id="change">

     <button type="button" onclick="brown();"></button>
	 <button type="button" onclick="yellow();"></button>
	 <button type="button" onclick="greenyellow();"></button>
	 <button type="button" onclick="blue();"></button>


     
</div> 




   <nav>

         
        
 <ul>
 
 
 <li><a href="YemekAl.php">Anasayfa</a>
 
 
 </li>
  <li><a href="hakkimizda.php">Hakkımızda</a></li>
   
   <li><a href="iletisim.php">İletişim</a>
   
   </li>
 <li>
 <a href="login.php">Çıkış Yap</a>
 </li>

 </ul>
 </nav> 

 <div class="container1">
        <form id="contact" name="form" action=" "method="POST">
            <h2>İletişim Sayfası</h2>
            <div class="form-control">
                <input placeholder="Adınız Soyadınız" type="text" required autofocus>
            </div>
            <div class="form-control">
                <input placeholder="E-Posta Adresiniz" type="email" required>
            </div>
            <div class="form-control">
                <input placeholder="Konu" type="text" required>
            </div>
            <div class="form-control">
                <textarea placeholder="Lütfen Mesajınızı Buraya Yazın.." required></textarea>
            </div>
            <div class="form-control">
                <button name="submit" type="submit" id="submit">GÖNDER</button>
                <?php echo $status;?></p>
            </div>
        </form>
    </div>




<script src="javascript.js">
    function brown(){
	  document.getElementById("change").style.background-color=="brown";
	}
	function yellow(){
	  document.getElementById("change").style.background-color=="yellow";
	}
   
    function greenyellow(){
	  document.getElementById("change").style.background-color=="greenyellow";
	}
   function blue(){
	  document.getElementById("change").style.background-color=="blue";
	}


</script>

</body>
<script src="javascript.js">

    



</script>




</html>