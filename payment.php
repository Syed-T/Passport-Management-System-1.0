


<?php

include('header.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>



<div class="jumbotron">
<section class="signup-form">
    <h2 class="text-center">Payment</h2>
    <div class="signup-form-form">
      <form action="includes/payment.inc.php" method="post" style="display: flex;
    flex-direction: column; align-items: center;">
                <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>

           
                <div class="form-group col-md-6">
                <label for="cname" class="labelcolor" style="color: black;
                    font-variant: normal;
                    font-size: medium;">Name on Card</label>
                <input type="text" class="form-control" name="cardname" id="cname" placeholder="" required>
                </div>

                <div class="form-group col-md-6">
                <label for="ccnum" class="labelcolor" style="color: black;
                    font-variant: normal;
                    font-size: medium;">Credit card number</label>
                <input type="text" class="form-control" name="cardnumber" id="ccname" placeholder="1111-2222-3333-4444" required>
                </div>
                 <div class="form-group col-md-6">
                <label for="expmonth" class="labelcolor" style="color: black;
                    font-variant: normal;
                    font-size: medium;">Exp Month</label>
                <input type="text" class="form-control" name="expmonth" id="expmonth" placeholder="September" required>
                </div>

                <div class="row">
              <div class="col-30" style="margin-right:10px;">
                <label for="expyear" class="labelcolor" style="color: black;
                    font-variant: normal;
                    font-size: medium;">Exp Year</label>
                <input type="text" class="form-control" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-30" style="margin-right:10px;">
                <label for="cvv" class="labelcolor" style="color: black;
                    font-variant: normal;
                    font-size: medium;margin-right:10px;">CVV</label>
                <input type="text" id="cvv"  class="form-control" name="cvv" placeholder="352" required>
              </div>
              <div class="col-30">
                <label for="amount" class="labelcolor" style="color: black;
                    font-variant: normal;
                    font-size: medium;">Amount</label>
                <input type="number" min="0" max="4000" step="100" id="amount"  class="form-control" name="amount" placeholder="Rs 4000" required>
              </div>
            </div>
            <div class="col-20">
               <button type="submit" name="submit" class="btn btn-primary">Proceed to Pay</button> 
            </div>
            
      </form>
    </div>
     

     </section>     
</div>




<?php
include('footer.php');
?>