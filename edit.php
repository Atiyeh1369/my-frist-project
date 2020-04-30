<?php
require 'connect.php';
$id = $_REQUEST['id'];
$sql = "SELECT * FROM Employees WHERE id='".$id."'"; 
$result = mysqli_query($conn, $sql) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Records</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
    </head>
    <body>
        <div class="form">
        <p><a href="insert.php">Insert New Record</a> 
        <h1>Update Employee</h1>
        <?php
        $status = '';
        if (isset($_POST['new']) && $_REQUEST['new']==1 )
            {
            $id=$_REQUEST['id'];
            $firstname =$_REQUEST['firstname'];
            $lastname =$_REQUEST['lastname'];
            $age =$_REQUEST['age'];
            $email =$_REQUEST['email'];
            $update = "UPDATE Employees SET firstname='".$firstname."', lastname='".$lastname."', age='".$age."', email='".$email."' WHERE id='".$id."'";
            $result = mysqli_query($conn, $update) or die(mysqli_error());
            $status = "<a href='view.php'>View Updated Record</a>";
            echo '<p style="color:#FF0000;">'.$status.'</p>';            
        }else {
        ?>
        <div>
            <form name="form" method="POST" action="">
                <input type="hidden" name="new" value="1"/>
                <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                <p><input name="firstname" type="text" placeholder="Enter First Name"
                          required value="<?php echo $row['firstname'];?>"/></p>
                <p><input type="text" name="lastname" placeholder="Enter Last Name" 
                            required value="<?php echo $row['lastname'];?>" /></p>
                <p><input type="text" name="age" placeholder="Enter Age" 
                            required value="<?php echo $row['age'];?>" /></p>
                <p><input type="email" name="email" placeholder="Enter Email" 
                            required value="<?php echo $row['email'];?>" /></p>
                <p><input name="submit" type="submit" value="Update" /></p>
            </form>
            <?php } ?>
            
        </div>
        </div>
    </body>
</html>

