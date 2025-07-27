<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "product_detail");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Fillup Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script>
	function radiob(x){
		if ( x == 0 ) document.getElementById("mycode").style.display="block";
		else document.getElementById("mycode").style.display="none";
		return;
	}
	</script>
  </head>
  <body style="margin-left:25%;">
<div >
        
        <h4 class="mb-3">INVESTMENT FORM</h4><form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="First Name" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="Input your Email address here">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
			<div class="col-12">
              <label for="email" class="form-label">Contact Number</label>
              <input type="email" class="form-control" id="email" placeholder="Input your Contact Number here">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Input your complete address" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="Zip Code" required="">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>
          <hr class="my-4">

          <h4 class="mb-3">Payment Method</h4>

          <div class="my-3">
            <div class="form-check">
              <input name="paymentMethod" type="radio" class="form-check-input" checked="" value="Gcash" onclick="radiob(0)" checked>
              <label class="form-check-label" for="credit">Gcash</label>
            </div>
            <div class="form-check">
              <input name="paymentMethod" type="radio" class="form-check-input" value="Cash" onclick="radiob(1)">
              <label class="form-check-label" for="debit">Cash</label>
			  <hr class="my-4">
			  
		 <div id="mycode">
		  <label class="form-check-label" for="debit"><b>Please pay exact amount before checking out</b></label>
		  <input type="text" class="form-control" id="referencenum" placeholder="Please input your payment reference number here" required="">
		  <img  src="../imgs/qr.jpg" alt="" width="420px" height="450px">
		 </div>
            </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
  </body>
</html>