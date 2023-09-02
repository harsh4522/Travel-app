<?php
     $server = "localhost";

     $username = "root";
 
     $password = "";

     $con = mysqli_connect($server, $username, $password);
     if(!$con){echo "Success connecting to the db";}
     $insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $sno = $_POST['sno'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`sno`,`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$sno','$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    if($con->query($sql) == true){
        echo "Successfully inserted";}
        $con->close();
    ?>