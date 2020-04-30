<?php
require 'connect.php';
$status = '';
if(isset($_POST['new']) && $_POST['new']==1){
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $age = $_REQUEST['age'];
    $email = $_REQUEST['email'];
    $sql = "INSERT INTO Employees 
        (`firstname`, `lastname`, `age`, `email`) VALUES
        ('$firstname', '$lastname', '$age', '$email')";
    mysqli_query($conn, $sql)
    or die(mysqli_error($conn));
    $status = "New Employee Inserted Successfully. </br></br>
    <a href='view.php'>View Inserted Record</a>";
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insert New Employee</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="form">
            <p><a href="view.php">View Employees</a></p>
            <div>
                <h1>Insert New Employee</h1>
                <form name="form" method="post" action="">
                    <input type="hidden" name="new" value="1">
                    <p><input type="text" name="firstname" placeholder="Enter Firstname" required/></p>
                    <p><input type="text" name="lastname" placeholder="Enter Lastname" required /></p>
                    <p><input type="text" name="age" placeholder="Enter Age" required /></p>
                    <p><input type="email" name="email" placeholder="Enter Email" required /></p>
                    <p><input name="submit" type="submit" value="Submit" /></p>
                </form>
                <p style="color: red;"><?php echo $status; ?></p>
            </div>     
        </div>
    </body>

</html>
