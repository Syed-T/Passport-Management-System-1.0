<?php 

include('header.php');
require_once 'includes/functions.inc.php';
?>
<html>
<style>
/* .without_ampm::-webkit-datetime-edit-ampm-field {
   display: none;
 }
 input[type=time]::-webkit-clear-button {
   -webkit-appearance: none;
   -moz-appearance: none;
   -o-appearance: none;
   -ms-appearance:none;
   appearance: none;
   margin: -10px; 
 } */

</style>
<h5 class="text-center" style="color:#1a8306;margin-bottom:50px;"> Plz select the appointment Date and Time
        </h5>


<div class="container">
<table width="100%" border="2" bordercolor="black" cellpadding="10" cellspacing="10" style="margin-bottom:50px"  class="table mytable">
<tbody> 
<tr>
    
     <th>Monday</th>
     <th>Tuesday</th>
     <th>Wednesday</th>
     <th>Thursday</th>
     <th>Friday</th>
     <th>Saturday</th>
 </tr>
 <tr>
     <td>8:00 AM - 5:30 PM</td>
     <td>8:00 AM - 5:30 PM</td>
     <td>8:00 AM - 5:30 PM</td>
     <td>8:00 AM - 5:30 PM</td>
     <td>8:00 AM - 5:30 PM</td>
     <td>8:00 AM - 2:30 PM</td>
 </tr>
</tbody>
</table>

        
        

        <form method="post" action="includes/appointment.inc.php" >
            
            <div class="form-group col-md-4" >
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="row">
             <div class="form-group">
                <label for="time">Time</label>
                <input type="time" id="time" name="time" class="without_ampm" >
             </div>
                <div class="form-group col-md-4">
                    <label for="am">AM</label>
                    <input type="radio" min='1:30' max='2:30' id="am" name="ampm" value="am">
                    <label for="pm">PM</label>
                    <input type="radio" id="pm" name="ampm" value="pm" >
                    
                </div>  
            </div>
           
            <button id="appointmt" type="submit" name="appointmentbtn" class="btn btn-primary">
             
            Save & Next
            </button> 
        </form>
</html>
         <?php
            //  if(isset($_GET["error"])){
            //     if($_GET["error"]=="uploaddoc"){
            //         echo "<p class = 'errormsg'>
            //             Plz upload documents!!
            //         </p>";
            //     }
            // }
        ?> 


    </div>
   
   
<!-- <input type="time" id="time">
<button onclick="print()">Submit</button> -->
<script>
// function printtime() {
//     t = document.getElementById('time').value;
//     var [h,m] = t.split(":");
//     var ampm = (h%12+12*(h%12==0))+":"+m, h >= 12 ? 'PM' : 'AM';
//     console.log(ampm);
    
// }

</script>




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


