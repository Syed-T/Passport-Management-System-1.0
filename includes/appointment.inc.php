<?php

if(isset($_POST["appointmentbtn"])){
    $date = $_POST["date"];

    $time  = $_POST['time'];
     $ampm = $_POST['ampm'];
    require_once 'dbh.inc.php';



    //dte-date tme-time
    $sql = "INSERT INTO appointment (usersUid,dte,tme,ampm) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../appointment.php?error=stmtfailed");
        exit();
    }
    session_start();
    $usersUid=$_SESSION["useruid"];
    mysqli_stmt_bind_param($stmt,"ssss",$usersUid,$date,$time,$ampm);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    

    header("location:../payment.php");
    exit();

}   
else{
    header("location:../documents.php");
}


?>