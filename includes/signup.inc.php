 <?php
    if(isset($_POST["submit"])){ 
       $name = $_POST['name']; //No error handler
       
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $userName = $_POST['uid'];
       $pwd = $_POST['pwd'];
       $pwdRepeat = $_POST['pwdRepeat'];

       session_start();
       $_SESSION['name'] = $name;
       $_SESSION['email'] = $email;
       $_SESSION['phone'] = $phone;
       $_SESSION['userName'] = $uid;
       
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
    
     if(emptyInputSignUp($name,$email,$phone,$userName,$pwd,$pwdRepeat)!==false){       
        header("location:../signup.php?error=emptyinput");
        exit();
     } 
     if(invalidUid($userName)!==false){
         header("location:../signup.php?error=invaliduid");
         exit();
     }
     if(invalidEmail($email)!==false){
         header("location:../signup.php?error=invalidemail");
         exit();
     }
     if(invalidPhone($phone)!==false){
         header("location:../signup.php?error=invalidphone");
         exit();
     }
     if(notmorethan4($pwd)!==false){
        header("location:../signup.php?error=min4char");
        exit();
     }
     if(pwdMatch($pwd,$pwdRepeat)!==false){
         header("location:../signup.php?error=passworddontmatch");
         exit();
     }
     if(uidExists($connection,$userName,$email)!==false){
         header("location:../signup.php?error=usernametaken");
         exit();
     }
     createUser($connection,$name,$email,$phone,$userName,$pwd);

  } 
 else{    
     header("location:../signup.php");
}

?>

