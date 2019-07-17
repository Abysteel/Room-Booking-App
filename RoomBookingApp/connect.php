<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "roombooker";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $roombooker);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>