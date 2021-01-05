<?php
    include('header.php');
?>
  
    <!-- jumbotron starts style="background:url('doc.jpg') -->
<div class="jumbotron jumbo-img">
    <!-- <img src='http://www.gettyimages.in/detail/74809686'> -->
    <div class="container">
        <h5 class="docheader" style="color: chocolate;
            
            font-size: 25px;
            margin: 50px;"> Upload the documents to proceed further
        </h5>
        <form method="post" action="includes/documents.inc.php" enctype="multipart/form-data">
            <!-- <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            
            <div class="form-group" style="margin-top:90px">
                <label class="labelnm" style="font-size: 21px;
                    color: green;
                    margin: 10px 50px;" for="myfile1">Aadhaar Card</label>
                <input type="file" id="myfile1" name="adharcrd" style="color:white"required>
            </div>
             <div class="form-group">
                <label for="myfile2" style="font-size: 21px;
                    color: green;
                    margin: 10px 50px;">PAN CARD</label>
                <input type="file" id="myfile2" name="pancrd" style="color:white" required>
            </div>

            <!--
            <div class="form-group">
                <label for="myfile3">Birth Certificate</label>
                <input type="file" id="myfile3" name="bc" required>
            </div>
            <div class="form-group">
                <label for="myfile4">TC/Marks Card</label>
                <input type="file" id="myfile4" name="tc" required>
            </div> -->
            
            <button id="documents" type="submit" name="documentsbtn" class="btn btn-primary">
        
            Save & Next
            </button> 
            
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"]=="uploaddoc"){
                    echo "<p class = 'errormsg'>
                        Plz upload documents!!
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




<!-- <footer class="footer" style="position:fixed; bottom:0; width:100%" >
         <div class="container">
        <p>
            © Content Owned by Ministry of External Affairs, Government of India
        </p>
        </div>
    </footer> -->