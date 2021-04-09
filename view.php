<?php
require('db.php');
include("auth.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div>
        <p><a href="Yemekal.php">Home </a>|<a href="iletisim.php">Insert new Record </a></p>
        <h2>View Records</h2>
        <table width="100%" border="1">
        <thead>
            <tr>
                <th><strong>NO</strong></th>
                <th><strong>Name</strong></th>
                <th><strong>Email</strong></th>
                <th><strong>Task</strong></th>
                <th><strong>Message</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php

            $cout=1;
            $sql_query="SELECT *  FROM comment ORDER BY ID Desc";
            $result=mysqli_query($con,$sql_query);
            while($rows = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td align="center"><?php echo $cout; ?></td >
                    <td align="center"><?php echo $rows["name"]; ?></td >
                    <td align="center"><?php echo $rows["email"]; ?></td >
                    <td align="center"><a href="edit.php ?ID=<?php echo $rows["ID"];?>">Edit</a></td >
                    <td align="center"><a href="delete.php ?ID=<?php echo $rows["ID"];?>">Delete</a></td >
                </tr>
                <?php $cout++; ?>
            
            <?php }?>
        </tbody>
    
    </table>
    </div>
</body>
</html>