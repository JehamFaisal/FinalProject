<?php
    
     $server = "";
     $username = "root";
     $password = "";
     $dbname = "finalproject";

     $conn = mysqli_connect($server, $username, $password, $dbname);

     if(!$conn){
         die("Connection Failed:".mysqli_connect_error());
     }

?>