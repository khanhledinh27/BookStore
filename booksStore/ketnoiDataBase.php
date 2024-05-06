<?php
    $serverName = "localhost";
    $userName = "root";
    $pwd ="";
    $nameDB = "booksdb";

    $conn = mysqli_connect($serverName, $userName, $pwd, $nameDB);

    if (!$conn == false){
        echo mysqli_connect_error();
    }
?>