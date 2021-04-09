<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['ID'];
$query="SELECT * FROM `comment` WHERE id='".$ID."'";
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($result);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div class="form">
        <p><a href="dashboard.php">Dashboard</a>|<a href="insert.php">Insert new Record</a></p>
        <h1>Update Record</h1>
        <?php
        $status="";
        if(isset($_POST['new']) && ($_POST['new']==1))
        {
        $ID=$_REQUEST['ID'];
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
       $task=$_SESSION['task'];
        $message=$_SESSION['message'];
        $update="UPDATE `comment` SET name='".$name."',email='".$email."',task='".$task."',message='".$message."' WHERE ID='".$ID."'";
        mysqli_query($con,$update);
        $status="Record updated successfully.<br><br><a href='view.php'> View updated record</a>";
        echo '<p style="color:"red";>'.$status.'</p>';
        }
        else{
        ?>
        <div>
            <form name="form" method="POST" action="">
                <input type="hidden" name="new" value="1"/>
                <input type="hidden" name="ID" value="<?php echo $rows['ID']?>"/>
                <p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $rows['name'];?>" /></p>
                <p><input type="email" name="email" placeholder="Enter email" required value="<?php echo $rows['email'];?>" /></p>
                <p><input type="text" name="task" placeholder="Enter task" required value="<?php echo $rows['task'];?>" /></p>
                <p><textarea  placeholder="Enter comment" required value="<?php echo $rows['message'];?>" /></p>
                <p>
                    <input type="submit" name="submit" value="Update"/>
                </p>
            </form>
        <?php }?>
        </div>
    </div>
</body>
</html>