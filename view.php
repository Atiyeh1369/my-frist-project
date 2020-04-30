<?php
require('connect.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>View Employees</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
    </head>
    <body>
        <div class="form">
            <p><a href="insert.php" style="font-size: 17px;">Insert New Record</a>
            <h2 style="text-align: center;">View Employees</h2>
            <table class="table">
                <thead>
                    <tr class="success">
                        <th><strong>No</strong></th>
                        <th><strong>Firstname</strong></th>
                        <th><strong>Lastname</strong></th>
                        <th><strong>Age</strong></th>
                        <th><strong>Email</strong></th>
                        <th><strong>Edit</strong></th>
                        <th><strong>Delete</strong></th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 1;
                  $sql = "SELECT * FROM Employees ORDER BY id asc;";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_assoc($result)) {?>
                    <tr class="info">
                        <td align="center"><?php echo $count; ?></td>
                        <td align="center"><?php echo $row['firstname']; ?></td>
                        <td align="center"><?php echo $row["lastname"]; ?></td>
                        <td align="center"><?php echo $row["age"]; ?></td>
                        <td align="center"><?php echo $row["email"]; ?></td>
                        <td align="center">
                        <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                        </td>
                        <td align="center">
                        <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
                        </td>
                    </tr>
                  <?php $count++;} ?>
                </tbody>
            </table>
    </body>
</html>
        

