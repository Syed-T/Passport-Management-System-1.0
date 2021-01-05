<?php
    
        //connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "passport";

        $connection = mysqli_connect($servername,$username,$password,$database);

        if(!$connection){
            die ("Failed to connect due to ->".mysqli_connect_error());
        }
        // else{
        //     echo "Connection successful<br>";
            
        // }
    
       //connection to the database
   
       // require_once 'includes/dbh.inc.php';      
?>