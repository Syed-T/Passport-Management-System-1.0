<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Passport DBMS</title>
</head>

<body>

    <div class="navbar-header">
        <a href="index.php" class="">
            <img src="logo.jpg" width="80" height="80" class=" align-top logo-img" alt="" loading="lazy">

        </a>
        <div class="navbar-brand">
            <a href="index.php">
                <h2 id="brand-name">Passport Services</h2>
            </a>
            <p id="small-brand">Minitry Of External Affairs</p>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>

                </ul>
                
                <?php
                 if( isset($_SESSION["useruid"]) && !empty($_SESSION["useruid"]) )
                 {
                    echo "<a class='applybtn' id='applybtn' href='apply.php' style=' border: 1px solid #007bff;
                    background: #007bff;
                    border-radius: 3px;
                    color: white;
                    height: 30px;
                    font-size: 14px;
                    padding: 4px 6px;
                    text-decoration:none;
                    margin-left:10px;
                    '>Apply</a>";
                            
                    //   echo "<button class='btn btn-primary btn-sm' id='logoutbtn' class='float-left submit-button'
                    //   onclick='logout()'>Log Out</button>";
                    echo "<a class='logoutbtn' id='logoutbtn' href='logout.php' style=' border: 1px solid #007bff;
                    background: #007bff;
                    border-radius: 3px;
                    color: white;
                    height: 30px;
                    font-size: 14px;
                    padding: 4px 6px;
                    text-decoration:none;
                    margin-left:10px;'
                    >Log out</a>";
                            
                }
                else
                {
                    echo "<button class='btn btn-primary btn-sm' id='signupbtn' class='float-left submit-button'
                        onclick='signup()'>Sign Up</button>";
                    echo "<button class='btn btn-primary btn-sm' id='loginbtn' class='float-left submit-button'
                        onclick='login()'>Login</button>";
                }
                ?>  
            </div>
        </nav>
    </div>
    <!-- <div class="wrapper">
        <marquee direction="left"><span class="marquee" id="mov-text">Operations at select Passport Seva Kendra (PSKs)
                and Post Office Passport Seva Kendras (POPSKs) have been resumed. Please refer the list of operational
                PSKs and POPSKs in the Latest FAQs Section. Applicants may reschedule their appointments to the nearest
                operational PSK/POPSK to avail the services. Restrictions on the number of rescheduling allowed for
                appointments have been relaxed in case applicant is unable to visit the PSK/POPSK on the date of
                appointment. Applicants are advised to wear a mask, carry sanitizer and follow social distancing norms
                at PSKs/POPSKs during the visit. ** 139 Indian Mission/Post are connected with Passport Seva System.
            </span></marquee>
    </div> -->

   
    <!-- navbar-header ends -->
    <!-- jumbotron starts  -->
    
    
    
    <!-- jumbotron ends -->
    
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
        document.getElementById("signupbtn").onclick = function () {
            location.href = "signup.php";
            // window.open('apply.php');
        };
        document.getElementById("loginbtn").onclick = function () {
            location.href = "login.php";
            // window.open('apply.php');
        };
        // document.getElementById("logoutbtn").onclick = function () {
        //     location.href = "logout.php";
        //     // window.open('apply.php');
        //     };
                // document.getElementById("logoutbtn").onmouseover= function(e){this.style.color='white'; };
                // document.getElementById("logoutbtn").onmouseleave= function(e){this.className = this.className.replace('my-special-class',''); };


        // document.getElementById("applybtn").onclick = function () {
        //     location.href = "apply.php";
        //     // window.open('apply.php');
        // };
        // function apply(){
        //     window.open("apply.php");
        // }
    </script>
</body>

</html>