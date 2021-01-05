<?php 
    include('header.php');
?>

<div class="jumbotron jumbo-img" style="height:700px">
    <div class="container">
    <legend class="text-center text-light">Sign Up</legend>
        <form method="post" action="includes/signup.inc.php" style="display: flex;
    flex-direction: column; align-items: center;" style="padding-bottom:40p">     
            <div class="form-group col-md-6">
                <label class="labelcolor" style="color: white;
                    font-variant: normal;
                    font-size: medium;" for="RegisterInputName">Full Name</label>
                <input type="text" class="form-control" name="name" value="<?php
                                                                                if(isset($_SESSION['name'])){
                                                                                
                                                                                echo $_SESSION['name'];
                                                                                }
                                                                                
                                                                                 ?>"        id="RegisterInputName">
            </div>
            <div class="form-group col-md-6">
                <label class="labelcolor" style="color: white;
                    font-variant: all-petite-caps;
                    font-size: medium;" for="registerInputEmail1">Email address</label>
                
                <input type="email" class="form-control" name="email" value="<?php
                                                                                if(isset($_SESSION['email'])){
                                                                                
                                                                                echo $_SESSION['email'];
                                                                                }
                                                                                
                                                                                 ?>"  id="RegisterInputEmail1"
                    aria-describedby="emailHelp">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group col-md-6">
                <label class="labelcolor" style="color: white;
                    font-variant: all-petite-caps;
                    font-size:medium;" for="registerInputPhone">Phone</label>
                <input type="tel" class="form-control" name="phone" value="<?php
                                                                                if(isset($_SESSION['phone'])){
                                                                                
                                                                                echo $_SESSION['phone'];
                                                                                }
                                                                                
                                                                                 ?>"  id="RegisterInputPhone"
                    aria-describedby="PhoneHelp">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group col-md-6">
                <label class="labelcolor" style="color: white;
                    font-variant: all-petite-caps;
                    font-size:medium ;" for="RegisterInputusername">Username</label>
                
                <input type="text" class="form-control" name="uid" value="<?php
                                                                                if(isset($_SESSION['userName'])){
                                                                                
                                                                                echo $_SESSION['userName'];
                                                                                }
                                                                                
                                                                                 ?>"  id="RegisterInputUsername">
            </div>
            <div class="form-group col-md-6">
                <label class="labelcolor" style="color: white;
                    font-variant: all-petite-caps;
                    font-size: medium;" for="RegisterInputPassword1">Password</label>
                <input type="password" class="form-control" name="pwd" id="RegisterInputPassword1">
            </div>

            <div class="form-group col-md-6">
                <label class="labelcolor" style="color: white;
                    font-variant: all-petite-caps;
                    font-size: medium;" for="RegisterInputPassword2">Confirm password</label>
                <input type="password" class="form-control" name="pwdRepeat" id="RegisterInputPassword2">
            </div>
            <button type="submit" name="submit" class="btn btn-primary" >Submit</button>

            <?php   
                    if(isset($_GET["error"])){
                            if($_GET["error"]=="emptyinput"){
                                echo "<p class = 'errormsg'>
                                    Fill in all Fields!
                                </p>";
                            }
                            if($_GET["error"]=="invaliduid"){
                                echo "<p class = 'errormsg'>
                                    Select a proper username!
                                </p>";
                            }
                            if($_GET["error"]=="invalidemail"){
                                echo "<p class = 'errormsg'>
                                    Choose proper email!
                                </p>";
                            }
                            if($_GET["error"]=="invalidphone"){
                                echo "<p class = 'errormsg'>
                                    Invalid phone no!
                                </p>";
                            }
                            if($_GET["error"]=="min4char"){
                                echo "<p class = 'errormsg'>
                                    Min four characters required!!
                                </p>";
                            }
                            if($_GET["error"]=="passworddontmatch"){
                                echo "<p class = 'errormsg'>
                                    Password doesn't match!
                                </p>";
                            } 
                            if($_GET["error"]=="uidExists"){
                                echo "<p class = 'errormsg'>
                                    Username already taken!!
                                </p>";
                            }
                            if($_GET["error"]=="stmtfailed"){
                                echo "<p class = 'errormsg'>
                                    Something went wrong,try again!!
                                </p>";
                            }
                            if($_GET["error"]=="none"){
                                echo "<p id = 'successsignup'>
                                    Successfully signed!! 
                                </p>";
                            }
                     }
                  ?>


        </form>
    </div>
</div>

<?php
include('footer.php');
?>