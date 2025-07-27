<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "product_detail");

if(isset($_POST["add_to_cart"]))
{
	
	if(isset($_SESSION["shopping_cart"]))
	{
		
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			echo '<script>alert("Item Added Successfuly")</script>';
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"],
				'item_size'			=>	$_POST["hidden_size"]
				
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			echo '<script>window.location="pizzas.php"</script>';
		}
		else
		{
		include_once('cart.php');
		echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"],
			'item_size'			=>	$_POST["hidden_size"]
			
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo"<html>
				<body>
				<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
				<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
				<script type='text/javascript'>
				$(function(){
				Swal.fire(
				'Removed Successfuly',
				'Click ok to proceed!',
				'successful'
				)});
				</script>
				</body>
				</html>
                ";		
				
			}
		}
	}
}
?>
<html>
<!DOCTYPE html>
<html lang="en-us">
<head>	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/cart.css">
	<link rel="icon" href="../imgs/pic4.png">
	<title> Calle Feliz Pizza </title>
		
</head>
<body class="mainbg">


	<nav>
	<div class="navbar" id="keep">
			<a href="../pages/pizzas.php"><img class="logo" src="../imgs/pic4.png" alt=""></a>
			<a href="cart.php"><img class="cart" src="../imgs/CART.png" alt=""></a>
			<ul>
			<li><a href="../main.html">Home </a></li>
			<li><a>Menu </a>
				<div class="content">
					<ul>
						<li><a href="pizzas.php"> Pizzas </a></li>
						<li><a href="pasta.php"> Pasta</a></li>
						<li><a href="combos.php"> Combos </a></li>
					</ul>
				</div>
			</li>
			<li><a href="../pages/about.html">About us </a></li>
		</ul>
	</div>
	</nav>
	<div  class="cart-banner" ><span>PALAGYAN AKO NG DESIGN DITO THANKS</span></div>
				<table>
					<tr class="trtop">
						<th>PRODUCT</th>
						<th>SIZE</th>
						<th>QUANTITY <input type="hidden" name="update"></th>
						<th>PRICE</th>
						<th>TOTAL PRICE</th>
						<th>ACTION</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_size"]; ?></td>
						<td><input type="text" value="<?php echo $values["item_quantity"]; ?>"></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><button  class="remove" type="submit"><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span>Remove</span></a></button></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="4" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td> <button type="submit"  name="checkout" class="checkout" id="myBtn1"/>CHECKOUT</span></td>
					</tr>
					<?php
					}
					?>
					</table>
					
					<div id="myModal1" class="modal1">
						<div class="modal-content1">
							<span class="close1">&times;</span>
							<form action="connect.php" method="post">
								<span><h1 style="text-align:center;margin-top:-10vh;">CHECKOUT FORM</h1>
								<input class="input1" type="text" name="Customer_firstname" placeholder="Enter your first name here" required> </input>
								<input class="input2" type="text" name="Customer_middlename" placeholder="Enter your middle name" required> </input>
								<input class="input3" type="text" name="Customer_lastname" placeholder="Enter your last name here" required> </input>
								<input class="input4" type="text" name="Customer_email" placeholder="Enter your email"> </input>
								<input class="input5" type="text" name="Customer_phone" placeholder="Enter your contact number" required> </input>
								<input class="input6" type="text" name="Customer_address" placeholder="Enter your complete address" required> </input>
								<input class="input7" type="text" name="Customer_zipcode" placeholder="Enter your zip code" required> </input>
								
					<br/><br/><br/><br/><br/><br/><br/><br/>
							<span class="ordersum">ORDER SUMMARY</span>
								<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<table class="table">
					<tr>
					<td class="td"><input type="text" value="<?php echo $values["item_quantity"]; ?>pcs"></td>
						<td class="td"><?php echo $values["item_name"]; ?></td>
						<td class="td"><?php echo $values["item_size"]; ?></td>
						<td class="td">₱ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td class="tdtotal"colspan="4" align="right">Total</td>
						<td class="tdtotal"align="right">₱ <?php echo number_format($total, 2); ?></td>
					</tr>
					<?php
					}
					?>
					</table>
				<div class="paymentmethod">	
				<label class="Gcash" for="credit">Gcash</label><input name="paymentMethod" type="radio" class="check" checked="" value="Gcash" onclick="radiob(0)" checked>
				<label class="cash" for="debit">Cash</label><input name="paymentMethod" type="radio" class="check1" value="Cash" onclick="radiob(1)">
				</div>
			   <div id="mycode">
		  <label class="" for="debit"><b>Please pay exact amount before checking out</b></label>
		  <input type="text" class="reference" name="reference" id="referencenum" placeholder="Please input your payment reference number here">
		  <img  src="../imgs/qr.jpg" style="border-radius:20%;position:center;margin-left:50vh;margin-top:2vh;" alt="" width="420px" height="450px">
		 </div>
					
					 <button class="continue" name="continue_chkout" type="submit">Continue to checkout</button>
					 </form>
				</span>
			
					</div>
					</div>
	
	<footer>
		<div class="foot">
			<center>© 2021. <a href="#">I T P M.</a> All rights reserved.</center>
		</div>
	</footer>
	
	<script>
	function radiob(x){
		if ( x == 0 )document.getElementById("mycode").style.display="block";

		
		else document.getElementById("mycode").style.display="none";
		
		return;
		
	}
	
	window.onclick = function(event) {
		if (event.target == modal1) {
			modal1.style.display = "none";
		} 
	}
	var modal1 = document.getElementById("myModal1");
	var btn1 = document.getElementById("myBtn1");
	var span1 = document.getElementsByClassName("close1")[0];

	btn1.onclick = function() {
		modal1.style.display = "block";
	}

	span1.onclick = function() {
	modal1.style.display = "none";
	}
	</script>
</body>
</html>
