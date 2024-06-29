<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "oldneptours";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //check connection
    if(!$conn){
        die(mysqli_error($conn));
    }

?>