
<?php 
    include('header.php');
?>
   

<!-- Better to show the inputs for application form -->
<div class="jumbotron">
<div class="conatiner">
<form method="post" action="includes/apply.inc.php">
  <?php

    

  ?>
    <div class="form-row">
      <div class="form-group col-md-4">
          <p>Select Your Gender</p>
          <input type="radio" id="male" name="gender" value="male">
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Female</label>
      </div>
   
    </div>
    <div class="form-row">
      <div class="form-group col-md-2">
        
        <label for="date">Date of Birth</label>
        <input type="date" class="form-control" name="dob" id="date" >
      </div>
      <div class="form-group col-md-2">
        
        <label for="age">Age</label>
        <input type="text" class="form-control" name="age" id="age" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
      </div>
    </div>
    <div class="form-row">
    <!-- <div class="form-group col-md-4">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div> -->
    </div>
    <div class="form-row">
      
      <div class="form-group col-md-2">
        <label for="inputState">State</label>
        <select id="inputState" name="state" class="form-control">
          <option selected>Choose...</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Bihar">Bihar</option>
          <option value="Cihandgarh">Cihandgarh</option>
          <option value="Delhi">Delhi</option>
          <option value="Goa">Goa</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputCity">City</label>
        <input type="text" name="city" class="form-control" id="inputCity">
      </div>
    
      <div class="form-group col-md-2">
        <label for="inputZip">Pin Code</label>
        <input type="text" name="zip" class="form-control" id="inputZip">
      </div>

    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-2">
        
        <label for="fathername">Father Name</label>
        <input type="text" class="form-control" name="fathername" id="fathername" required>
      </div>
      <div class="form-group col-md-2">
        
        <label for="mothername">Mother Name</label>
        <input type="text" class="form-control" name="mothername" id="mothername" required>
      </div>
    </div>
    <!-- <a href ="afterappSub.php"> -->
  <button type="submit" name="applysub" class="btn btn-primary">Save & Next</button>
  <!-- </a> -->
  <?php
  if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo "<p class = 'errormsg'>
            Fill in all Fields!
        </p>";
    }
    
    else if($_GET["error"]=="stmtfailed"){
        echo "<p class = 'errormsg'>
            Something went wrong,try again!!
        </p>";
    }
    else if($_GET["error"]=="none"){
        echo "<p id = 'successsignup'>
            Successfully submitted!! 
        </p>";
    }
}
?>





</form>
<?php

?>
</div>
</div>
 <?php
// if($_SERVER['REQUEST_METHOD']=="POST"){
//     $fname = $_POST['fname'];
//     $gender = $_POST['gender'];
//     $dob = $_POST['dob'];
//     $phone = $_POST['phone'];
//     $email = $_POST['email'];
//     $address = $_POST['address']; 

//     require_once 'includes/dbh.inc.php';
    
//     $sql = "INSERT INTO `application` ( `fname`, `gender`, `dob`, `phone`, `email`, `address`) VALUES ( '$fname', '$gender', '$dob', '$phone', '$email', '$address')";
//     $result = mysqli_query($connection,$sql);
//     if($result){
//         echo "Your details are submitted <br>";
//     }
//     else{
//         echo "Failed to submit the details due to -> ".mysqli_error($connection);
//     }
// } 
?>

    <!-- jumbotron starts  -->
    <!-- <div class="container">
        <h5>Application Form</h5>
        <form method = "post" action = "">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="fname" id="name" aria-describedby="name" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            <!-- </div>
            <div class="form-group">
                <p>Select Your Gender</p>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
            </div>
            <div class="form-group">
                <label for="date">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="date" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label> -->
                <!-- <input type="tel" class="form-control" name="phone" id="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" required>
            </div>
            
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button id="afterappSub" type="submit" name="submit" class="btn btn-primary">Save & Next</button> 
            After application is submitted  - after app Sub -->
        


    <!-- </div> -->
   
    <!-- jumbotron ends  -->

    <!-- <footer class="footer">
         <div class="container"> -->
        <!-- <p>
            © Content Owned by Ministry of External Affairs, Government of India
        </p> -->
        <!-- </div> -->
    <!-- </footer>  -->
    <!-- mt-auto py-3 -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
        document.getElementById("afterappSub").onclick = function () {
          location.href = "afterappSub.php";
              // window.open('apply.php');
        };
        // function apply(){
        //     window.open("apply.php");
        // }
    </script>
</body>
<footer class="footer" style="    position: fixed;
    bottom: 0;
    margin: -1px;
    width: 100%;
    height: 50px" >
        <!-- <div class="container"> -->
        <p>
            © Content Owned by Ministry of External Affairs, Government of India
        </p>
        <!-- </div> -->
    </footer>
</html>