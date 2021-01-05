<?php
 
function emptyInputSignUp($name,$email,$phone,$userName,$pwd,$pwdRepeat){
    $result;
    if(empty($name)||empty($email)||empty($phone)||empty($userName) ||empty($pwd)||empty($pwdRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function invalidUid($userName){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$userName)){ //!  ->   to check if error has occured
        $result = true;//checking for errors 
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){ //!  ->   to check if error has occured
        $result = true;//checking for errors 
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidPhone($phone){
    $result;
    if(strlen($phone)!=10){ //!  ->   to check if error has occured
        $result = true;//checking for errors 
    }
    else{
        $result = false;
    }
    return $result;
}
function notmorethan4($pwd){
    $result;
    if(strlen($pwd)<4){ //!  ->   to check if error has occured
        $result = true;//checking for errors 
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd,$pwdRepeat){
    $result;
    if($pwd!==$pwdRepeat){ //!  ->   to check if error has occured
        $result = true;  //checking for errors 
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($connection,$userName,$email){
    
    $sql = "SELECT * FROM signup WHERE usersUid=? OR usersEmail=?;";

    $stmt = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../signup.php?error = stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$userName,$email);

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($resultData)){//returns true if there is data and at the same time initializes
        return $row;
    }
    
    else{
        $result = false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
}


function createUser($connection,$name,$email,$phone,$userName,$pwd){
    $sql = "INSERT INTO signup (usersName,usersEmail,usersPhone,usersUid,usersPwd) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../signup.php?error=stmtfailed");
        exit();
    }
    // $hashedpassword = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss",$name,$email,$phone,$userName,$pwd);
    //pwd->hashedpwd
    
    mysqli_stmt_execute($stmt);
    
    $uidExists = uidExists($connection,$userName,$userName);
    session_start();
    $_SESSION["aftersignup"]="yes";
    
    
    
    header("location:../login.php");
    mysqli_stmt_close($stmt);
    exit();
}

//login 
function emptyInputLogin($userName,$pwd){
    $result;
    if(empty($userName)||empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function loginUser($connection,$userName,$pwd){
    $uidExists = uidExists($connection,$userName,$userName);
    //grab data from database ^
    if($uidExists===false){
        header("location:../login.php?error=wronguidexists/wronglogin");
        exit();
    }
    $pwduser = $uidExists["usersPwd"];
 
    // $checkPwd = password_verify($pwd,$pwdHashed);
    $checkpwd = pwdMatch($pwd,$pwduser);
    if($checkpwd===true){
        header("location:../login.php?error=wrongpwd/wronglogin");
        exit();
    }

    else if($checkpwd===false){ //false means No-error
      
        header("location:../index.php");
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];//1
        $_SESSION["useruid"] = $uidExists["usersUid"];//syed
        exit();
    }
}
//application


function emptyInputApplication($gender,$dob,$age,$address,$city,$state,$zip,$fathername,$mothername){
    $result;
    if(empty($gender)||empty($dob)||empty($address)||empty($age)||empty($city)||empty($state)||empty($zip)||empty($fathername)||empty($mothername)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

