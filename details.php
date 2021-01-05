<style>
.bordercl {
    border:1px solid black !important;
}

</style>

<?php
    include('header.php');
    

    require_once 'includes/dbh.inc.php';
    
// accessing signup data

    $userName = $_SESSION["useruid"];

    $sql = "SELECT * FROM signup WHERE usersUid=? ;";
    // $sql = "SELECT * FROM signup WHERE usersUid=? ;";

    $stmt = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        // header("location:../signup.php?error = stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$userName);

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if($row1 = mysqli_fetch_assoc($resultData)){//returns true if there is data and at the same time initializes
        
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);



// accessing application data
   
        
    $sql = "SELECT * FROM  application WHERE usersUid=? ;";
    // $sql = "SELECT * FROM signup WHERE usersUid=? ;";

    $stmt = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        // header("location:../signup.php?error = stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$userName);

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if($row2 = mysqli_fetch_assoc($resultData)){//returns true if there is data and at the same time initializes
        // return $row;
        // echo $row["gender"];
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

   

    //accessing appointment data 
    $sql = "SELECT * FROM appointment WHERE usersUid=? ;";
    // $sql = "SELECT * FROM appointment WHERE usersUid=? ;";

    $stmt = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        // header("location:../signup.php?error = stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$userName);

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if($row3 = mysqli_fetch_assoc($resultData)){//returns true if there is data and at the same time initializes
        
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

    //accessing payment data
    $sql = "SELECT * FROM payment WHERE usersUid=? ;";
    // $sql = "SELECT * FROM signup WHERE usersUid=? ;";

    $stmt = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        // header("location:../signup.php?error = stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$userName);

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if($row4 = mysqli_fetch_assoc($resultData)){//returns true if there is data and at the same time initializes
        
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

    
    // echo $row1["usersName"];
    // echo "<br>";
    // echo $row1["usersId"];
    // // echo $row["usersId"];
    // echo "<br>";

    // echo $row2["gender"];

    // echo "<br>";
    // echo $row3["tme"];

    
 
    // // echo $_SESSION["ampm"];

    // echo "<br>";
    // echo $row4["amount"];
?>
<style>
    @media print{
        .nobtn ,.nobtn *{
            visibility:hidden;  
        }
        .body *{
            visibility:hidden;
        }
        .print-container ,.print-container *{
            visibility:visible;
        }
        .print-container{
            /* position:absolute;
            left:10px;
            top:120px; */
        }
    }
</style>

<div class="container print-container" >
    <form  style="display: flex;
        flex-direction: column; align-items: center;">
            
            <div class="form-group col-md-6">
                <label class="labelcolor" style="color: black;
                    font-variant: normal;
                    font-size: medium;" for="RegisterInputName">Full Name</label>
                
                <input type="text" class="form-control bordercl" name="name" value="<?php echo $row1["usersName"]; ?>" id="RegisterInputName">
            </div>
            <div class="form-group col-md-6">
                <label class="labelcolor" style="color: black;
                    font-variant: all-petite-caps;
                    font-size: medium;" for="registerInputEmail2">Email address</label>
                
                <input type="email" class="form-control bordercl" name="email" value="<?php echo $row1["usersEmail"]; ?>" id="RegisterInputEmail2"
                    aria-describedby="emailHelp">
                 <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>  -->
            </div>
            <div class="form-group col-md-6">
                <label class="labelcolor" style="color: black;
                    font-variant: all-petite-caps;
                    font-size:medium;" for="registerInputPhone1">Phone</label>
                <input type="tel" class="form-control bordercl" name="phone" value="<?php echo $row1["usersPhone"]; ?>" id="RegisterInputPhone1"
                    aria-describedby="PhoneHelp">
                 <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>  -->
            </div>
            
            <!-- $row2 -->

            <div class="form-row" style="margin-left:160px">
                <div class="form-group col-md-3">
                    <label for="gender">Gender</label>
                    <input type="text" id="gender" class="form-control bordercl" name="gender" value="<?php echo $row2["gender"]; ?>">
                </div>
                <div class="form-group col-md-3">  
                    <label for="date">Date of Birth</label>
                    <input type="text" class="form-control bordercl" name="dob" id="date" value="<?php echo $row2["dob"]; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="age">Age</label>
                    <input type="text" class="form-control bordercl" name="age" id="age" value="<?php echo $row2["age"]; ?>">
                </div>
            </div>
    
      <div class="form-group col-md-6">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control bordercl" name="address" id="inputAddress" value="<?php echo $row2["address"]; ?>">
      </div>
      
        
        <div class="form-row" style="margin-left:160px" >
        <div class="form-group col-md-3">
            <label for="inputState">State</label>
            <input type="text" class="form-control bordercl" name="state" id="inputState" value="<?php echo $row2["age"]; ?>">
        </div>
        <div class="form-group col-md-3">
            <label for="inputCity">City</label>
            <input type="text" name="city" class="form-control bordercl" id="inputCity" value="<?php echo $row2["city"]; ?>">
        </div>
        
        <div class="form-group col-md-3">
            <label for="inputZip">Pin Code</label>
            <input type="text" name="zip" class="form-control bordercl" id="inputZip" value="<?php echo $row2["zip"]; ?>">
        </div>
        </div>
        
    
        <div class="form-row"  >
        <div class="form-group col-md-6">
            
            <label for="fathername">Father Name</label>
            <input type="text" class="form-control bordercl" name="fathername" id="fathername" value="<?php echo $row2["fathername"]; ?>">
        </div>
        <div class="form-group col-md-6">
            
            <label for="mothername">Mother Name</label>
            <input type="text" class="form-control bordercl" name="mothername" id="mothername" value="<?php echo $row2["mothername"]; ?>">
        </div>
        </div>
        <!-- $row3 -->
        <div class="form-row">
            <div class="form-group col-md-6" >
                        <label for="date">Appointment Date</label>
                        <input type="text"  class="form-control bordercl" id="date" name="date" value="<?php echo $row3["dte"]; ?>">
            </div> 
            <div class="form-group col-md-6">
                <?php
                    $ampm = $row3["ampm"];
                ?>    
                <label for="time">Appointment Time</label>
                <input type="text" id="time" name="time" class="without_ampm form-control bordercl" value="<?php echo $row3["tme"] . $ampm;?>">
            </div>   
        </div>
        <!-- $row4 -->
        <div class="form-group col-md-6">
            <label for="paymentid">Payment ID</label>
            <input type="text" class="form-control bordercl" name="paymentid" id="paymentid" value="<?php echo $row4["paymentid"]; ?>">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6" >
                <label for="amount">Amount</label>
                <input type="text"  class="form-control bordercl" id="amount" name="amount" value="<?php echo $row4["amount"]; ?>">
            </div>
            <div class="form-group col-md-6" style="margin-bottom:30px">
                <label for="status">Payment status</label>
                <input type="text"  class="form-control bordercl" id="status" name="status" value="<?php echo $row4["pstatus"]; ?>">
            </div>  
         </div>

         </form>

</div>
<button type="submit"  name="submit" onclick="window.print();" class="btn btn-primary nobtn " style="margin-bottom:30px;margin-left:735px">Print</button> 
  








<?php





    



































// function finder($v1, $v2){
    //     // $mid=0; $nid=-5; $v11='go';
        
    //     require_once 'includes/dbh.inc.php';
    //     $userName = $_SESSION["useruid"];
    //     //way one:
    //     $query1=mysqli_query($connection, sprintf("SELECT MAX(%d) FROM %s",$v1,$v2));
    //     // echo $query1;
    //     //way two: this will only work with the string inside ""
    //     // $query1=mysqli_query($connection, "SELECT MAX({v1}) FROM {$v2}");
    //     $row=mysqli_fetch_array($query1);
    //         echo $row;
    //         echo $row["gender"];
       
    // }
    // finder('gender', 'application');
    ///

        //write same code and return row as $row1 $row2 $row3 etc..
    //


    ?>