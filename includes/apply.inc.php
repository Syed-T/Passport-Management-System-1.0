<?php

if(isset($_POST["applysub"])){
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $fathername = $_POST["fathername"];
    $mothername = $_POST["mothername"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputApplication($gender,$dob,$age,$address,$city,$state,$zip,$fathername,$mothername)!==false){
        header("location:../apply.php?error=emptyinput");
        exit();
    }

    $sql = "INSERT INTO application (usersUid,gender,dob,age,address,city,state,zip,fathername,mothername) VALUES (?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../apply.php?error=stmtfailed");
        exit();
    }

    session_start();
    $usersUid=$_SESSION["useruid"];
    // $hashedpassword = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssisssiss",$usersUid,$gender,$dob,$age,$address,$city,$state,$zip,$fathername,$mothername);
    //pwd->hashedpwd
    
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../documents.php");//<<<<<---------

    exit();

}
else{
    header("location:../apply.php");
    exit();
}