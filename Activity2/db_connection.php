<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "integprog_db";
    $port = "4306";

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if($conn->connect_error){
        die('Could not Connect MySql Server:' . $conn -> connect_error);
    }
?>