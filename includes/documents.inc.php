<?php
    if(isset($_POST["documentsbtn"])){
        // $ac=$_POST["ac"];
        // $pc=$_POST["pc"];
        // $bc=$_POST["bc"];
        // $tc=$_POST["tc"];

        require_once 'dbh.inc.php';
        
        $file1 = $_FILES["adharcrd"];
        $file2 = $_FILES["pancrd"];
        // $file3 = $_FILES["file3"];
        // $file4 = $_FILES["file4"];

        $filename1 = $file1["name"];
        $filename2 = $file2["name"];
        // $filename3 = $file3["name"];
        // $filename4 = $file4["name"];


        $fileTmpname1 = $_FILES['adharcrd']['tmp_name'];
        $fileTmpname2 = $_FILES['pancrd']['tmp_name'];
        // $fileTmpname3 = $file3['tmp_name'];
        // $fileTmpname4 = $file4['tmp_name'];

        $fileDestination1= '../uploads/'.$filename1;
        move_uploaded_file($fileTmpname1,$fileDestination1);

        $fileDestination2= '../uploads/'.$filename2;
        move_uploaded_file($fileTmpname2,$fileDestination2);

        $sql = "INSERT INTO documents (usersUid,adharcrd,pancrd) VALUES (?,?,?);";//error ---- pass two more doc name and ? ;;
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location:../documents.php?error=stmtfailed");
            exit();
        }
        session_start();
        $usersUid=$_SESSION["useruid"];
        mysqli_stmt_bind_param($stmt,"sss",$usersUid,$filename1,$filename2);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        

        header("location:../appointment.php");
        exit();
        } 
        
        else{
            header("location:../apply.php");
            exit();
        }
?>
