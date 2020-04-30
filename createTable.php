<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'list';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection Failed!". mysqli_connect_error());
}
$sql = "CREATE TABLE Employees (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    age INT(10) NOT NULL,
    email VARCHAR(30) NOT NULL
    )";
if(mysqli_query($conn, $sql)){
    echo "Table Employees created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);



