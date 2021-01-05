<?php
    if(isset($_POST["submit"])){
        $amount=$_POST["amount"];
        $pstatus = 'sussessful';
        require_once 'dbh.inc.php';

       

        $sql = "INSERT INTO payment (usersUid,paymentid,amount,pstatus) VALUES (?,?,?,?);";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location:../payment.php?error=stmtfailed");
            exit();
        }
        session_start();
        $usersUid=$_SESSION["useruid"];
        $paymentno = rand(1000,1000000);
        $paymentid = $_SESSION["useruid"] . $paymentno;
        $_SESSION["paymentid"] = $paymentid;
        $_SESSION["status"] = $pstatus;
        mysqli_stmt_bind_param($stmt,"ssss",$usersUid,$paymentid,$amount,$pstatus);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        

        header("location:../details.php");
        exit();
    }
    else{
        header("location:appointment.php");
    }


?>