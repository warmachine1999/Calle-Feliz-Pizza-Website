<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "product_detail");
?>
<!DOCTYPE html>
<html lang="en-us">
<head>	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/cfp.css">
	<link rel="stylesheet" type="text/css" href="../css/popuppages.css">
	<link rel="icon" href="../imgs/pic4.png">
	<title> Calle Feliz Pizza </title>
		
</head>
<body class="bodymainbg">


	<!-- Navigation Bar -->	
	
	<nav>
	<div class="navbar" id="keep">
	<div>
			<img class="logo" src="../imgs/pic4.png" alt="">
			<a href="cart.php"><img class="cart" src="../imgs/CART.png" alt=""></a>
	</div>
	
		<ul>
			<li><a href="../main.html">Home </a></li>
			<li><a>Menu </a>
				<div class="content">
					<ul>
						<li><a href="#"> Pizzas </a></li>
						<li><a href="pasta.php"> Pastas</a></li>
						<li><a href="combos.php"> Combos </a></li>
					</ul>
				</div>
			</li>
			<li><a href="../pages/about.html">About us </a></li>
		<ul>
	</div>
	</nav>
	
	
	<!-- header -->
	
	
		<header>
			<div class="pagebg"></div>
			<div class="title">
				<b>P I Z Z A S</b>
			</div>
		</header>

	
	
	
	
	<!--main area-->
	<main>
		<section class="mainbg" id="display-a">
		<!--product-1-->
		<div id="myModal1" class="modal1">
			<div class="modal-content1">
				<span class="close1">&times;</span>
					<span><h1 style="text-align:center;margin-top:-10vh;">CHOOSE YOUR ORDER</h1>
			<?php
			$query = "SELECT * FROM product_detail_table WHERE ID IN (1,2) ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="table-responsive">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<table>
					<tr class="trtop">
						<th>PRODUCT</th>
						<th>QUANTITY</th>
						<th>SIZE</th>
						<th>PRICE</th>
						<th>ACTION</th>
					</tr>
						<tr><td><img src="../imgs/<?php echo $row["product_image"]; ?>" class="m" /><h4 class='pdOverlayname'><?php echo $row["product_name"]; ?></h4><br /></td>
						<td><div class="counter">
							<span class="down" onClick="decreaseCount(event, this)">-</span>
							<input type="text" name="quantity" value='0'>
							<span class="up"  onClick="increaseCount(event, this)">+</span>
						</div></td>
						<td><div class="sizepricebg"><span id="text2"><?php echo $row["product_size"]?></span></td>
						<td><div class="sizepricebg"/><span id="text2">PHP <?php echo $row["price"]; ?></span></td>
						<td><input type="submit" name="add_to_cart" class="addcart" value="Add to Cart" /></td>
						<input type="hidden" name="hidden_image" value="<?php echo $row["product_image"]; ?>" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_size" value="<?php echo $row["product_size"]; ?>" />
					</table>
					
				</form>
			</div>
		<?php
					}
				}
			?>
				</span>
			
		</div>
	</div>
	</div>
	<!--product-2-->
	<div id="myModal2" class="modal2">
			<div class="modal-content2">
				<span class="close2">&times;</span>
					<span><h1 style="text-align:center;margin-top:-10vh;">CHOOSE YOUR ORDER</h1>
			<?php
			$query = "SELECT * FROM product_detail_table WHERE ID IN (3,4) ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="table-responsive">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<table>
					<tr class="trtop">
						<th>PRODUCT</th>
						<th>QUANTITY</th>
						<th>SIZE</th>
						<th>PRICE</th>
						<th>ACTION</th>
					</tr>
						<tr><td><img src="../imgs/<?php echo $row["product_image"]; ?>" class="m" /><h4 class='pdOverlayname'><?php echo $row["product_name"]; ?></h4><br /></td>
						<td><div class="counter">
							<span class="down" onClick="decreaseCount(event, this)">-</span>
							<input type="text" name="quantity" value='0'>
							<span class="up"  onClick="increaseCount(event, this)">+</span>
						</div></td>
						<td><div class="sizepricebg"><span id="text2"><?php echo $row["product_size"]?></span></td>
						<td><div class="sizepricebg"/><span id="text2">PHP <?php echo $row["price"]; ?></span></td>
						<td><input type="submit" name="add_to_cart" class="addcart" value="Add to Cart" /></td>
						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_size" value="<?php echo $row["product_size"]; ?>" />
					</table>
					
				</form>
			</div>
		<?php
					}
				}
			?>
				</span>
			
		</div>
	</div>
	</div>
	<!--3rd product-->
	<div id="myModal3" class="modal3">
			<div class="modal-content3">
				<span class="close3">&times;</span>
					<span><h1 style="text-align:center;margin-top:-10vh;">CHOOSE YOUR ORDER</h1>
			<?php
			$query = "SELECT * FROM product_detail_table WHERE ID IN (5,6) ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="table-responsive">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<table>
					<tr class="trtop">
						<th>PRODUCT</th>
						<th>QUANTITY</th>
						<th>SIZE</th>
						<th>PRICE</th>
						<th>ACTION</th>
					</tr>
						<tr><td><img src="../imgs/<?php echo $row["product_image"]; ?>" class="m" /><h4 class='pdOverlayname'><?php echo $row["product_name"]; ?></h4><br /></td>
						<td><div class="counter">
							<span class="down" onClick="decreaseCount(event, this)">-</span>
							<input type="text" name="quantity" value='0'>
							<span class="up"  onClick="increaseCount(event, this)">+</span>
						</div></td>
						<td><div class="sizepricebg"><span id="text2"><?php echo $row["product_size"]?></span></td>
						<td><div class="sizepricebg"/><span id="text2">PHP <?php echo $row["price"]; ?></span></td>
						<td><input type="submit" name="add_to_cart" class="addcart" value="Add to Cart" /></td>
						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_size" value="<?php echo $row["product_size"]; ?>" />
					</table>
					
				</form>
			</div>
		<?php
					}
				}
			?>
				</span>
			
		</div>
	</div>
	</div>
	<!--product-4-->
	<div id="myModal4" class="modal4">
			<div class="modal-content4">
				<span class="close4">&times;</span>
					<span><h1 style="text-align:center;margin-top:-10vh;">CHOOSE YOUR ORDER</h1>
			<?php
			$query = "SELECT * FROM product_detail_table WHERE ID IN (7,8) ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="table-responsive">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<table>
					<tr class="trtop">
						<th>PRODUCT</th>
						<th>QUANTITY</th>
						<th>SIZE</th>
						<th>PRICE</th>
						<th>ACTION</th>
					</tr>
						<tr><td><img src="../imgs/<?php echo $row["product_image"]; ?>" class="m" /><h4 class='pdOverlayname'><?php echo $row["product_name"]; ?></h4><br /></td>
						<td><div class="counter">
							<span class="down" onClick="decreaseCount(event, this)">-</span>
							<input type="text" name="quantity" value='0'>
							<span class="up"  onClick="increaseCount(event, this)">+</span>
						</div></td>
						<td><div class="sizepricebg"><span id="text2"><?php echo $row["product_size"]?></span></td>
						<td><div class="sizepricebg"/><span id="text2">PHP <?php echo $row["price"]; ?></span></td>
						<td><input type="submit" name="add_to_cart" class="addcart" value="Add to Cart" /></td>
						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_size" value="<?php echo $row["product_size"]; ?>" />
						
						<!--SECOND-->
						
					</table>
					
				</form>
			</div>
		<?php
					}
				}
			?>
				</span>
			
		</div>
	</div>
	</div>
	<!--product-5-->
	<div id="myModal5" class="modal5">
			<div class="modal-content5">
				<span class="close5">&times;</span>
					<span><h1 style="text-align:center;margin-top:-10vh;">CHOOSE YOUR ORDER</h1>
			<?php
			$query = "SELECT * FROM product_detail_table WHERE ID IN (9,10) ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="table-responsive">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<table>
					<tr class="trtop">
						<th>PRODUCT</th>
						<th>QUANTITY</th>
						<th>SIZE</th>
						<th>PRICE</th>
						<th>ACTION</th>
					</tr>
						<tr><td><img src="../imgs/<?php echo $row["product_image"]; ?>" class="m" /><h4 class='pdOverlayname'><?php echo $row["product_name"]; ?></h4><br /></td>
						<td><div class="counter">
							<span class="down" onClick="decreaseCount(event, this)">-</span>
							<input type="text" name="quantity" value='0'>
							<span class="up"  onClick="increaseCount(event, this)">+</span>
						</div></td>
						<td><div class="sizepricebg"><span id="text2"><?php echo $row["product_size"]?></span></td>
						<td><div class="sizepricebg"/><span id="text2">PHP <?php echo $row["price"]; ?></span></td>
						<td><input type="submit" name="add_to_cart" class="addcart" value="Add to Cart" /></td>
						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_size" value="<?php echo $row["product_size"]; ?>" />
						
						<!--SECOND-->
						
					</table>
					
				</form>
			</div>
		<?php
					}
				}
			?>
				</span>
			
		</div>
	</div>
	</div>
	<!--product-6-->
	<div id="myModal6" class="modal6">
			<div class="modal-content6">
				<span class="close6">&times;</span>
					<span><h1 style="text-align:center;margin-top:-10vh;">CHOOSE YOUR ORDER</h1>
			<?php
			$query = "SELECT * FROM product_detail_table WHERE ID IN (11,12) ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="table-responsive">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<table>
					<tr class="trtop">
						<th>PRODUCT</th>
						<th>QUANTITY</th>
						<th>SIZE</th>
						<th>PRICE</th>
						<th>ACTION</th>
					</tr>
						<tr><td><img src="../imgs/<?php echo $row["product_image"]; ?>" class="m" /><h4 class='pdOverlayname'><?php echo $row["product_name"]; ?></h4><br /></td>
						<td><div class="counter">
							<span class="down" onClick="decreaseCount(event, this)">-</span>
							<input type="text" name="quantity" value='0'>
							<span class="up"  onClick="increaseCount(event, this)">+</span>
						</div></td>
						<td><div class="sizepricebg"><span id="text2"><?php echo $row["product_size"]?></span></td>
						<td><div class="sizepricebg"/><span id="text2">PHP <?php echo $row["price"]; ?></span></td>
						<td><input type="submit" name="add_to_cart" class="addcart" value="Add to Cart" /></td>
						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_size" value="<?php echo $row["product_size"]; ?>" />
						
						<!--SECOND-->
						
					</table>
					
				</form>
			</div>
		<?php
					}
				}
			?>
				</span>
			
		</div>
	</div>
	</div>
	<!--product-7-->
	<div id="myModal7" class="modal7">
			<div class="modal-content7">
				<span class="close7">&times;</span>
					<span><h1 style="text-align:center;margin-top:-10vh;">CHOOSE YOUR ORDER</h1>
			<?php
			$query = "SELECT * FROM product_detail_table WHERE ID IN (13,14) ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="table-responsive">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<table>
					<tr class="trtop">
						<th>PRODUCT</th>
						<th>QUANTITY</th>
						<th>SIZE</th>
						<th>PRICE</th>
						<th>ACTION</th>
					</tr>
						<tr><td><img src="../imgs/<?php echo $row["product_image"]; ?>" class="m" /><h4 class='pdOverlayname'><?php echo $row["product_name"]; ?></h4><br /></td>
						<td><div class="counter">
							<span class="down" onClick="decreaseCount(event, this)">-</span>
							<input type="text" name="quantity" value='0'>
							<span class="up"  onClick="increaseCount(event, this)">+</span>
						</div></td>
						<td><div class="sizepricebg"><span id="text2"><?php echo $row["product_size"]?></span></td>
						<td><div class="sizepricebg"/><span id="text2">PHP <?php echo $row["price"]; ?></span></td>
						<td><input type="submit" name="add_to_cart" class="addcart" value="Add to Cart" /></td>
						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_size" value="<?php echo $row["product_size"]; ?>" />
						
						<!--SECOND-->
						
					</table>
					
				</form>
			</div>
		<?php
					}
				}
			?>
				</span>
			
		</div>
	</div>
	</div>
	<!--product-8-->
	<div id="myModal8" class="modal8">
			<div class="modal-content8">
				<span class="close8">&times;</span>
					<span><h1 style="text-align:center;margin-top:-10vh;">CHOOSE YOUR ORDER</h1>
			<?php
			$query = "SELECT * FROM product_detail_table WHERE ID IN (15,16) ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="table-responsive">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<table>
					<tr class="trtop">
						<th>PRODUCT</th>
						<th>QUANTITY</th>
						<th>SIZE</th>
						<th>PRICE</th>
						<th>ACTION</th>
					</tr>
						<tr><td><img src="../imgs/<?php echo $row["product_image"]; ?>" class="m" /><h4 class='pdOverlayname'><?php echo $row["product_name"]; ?></h4><br /></td>
						<td><div class="counter">
							<span class="down" onClick="decreaseCount(event, this)">-</span>
							<input type="text" name="quantity" value='0'>
							<span class="up"  onClick="increaseCount(event, this)">+</span>
						</div></td>
						<td><div class="sizepricebg"><span id="text2"><?php echo $row["product_size"]?></span></td>
						<td><div class="sizepricebg"/><span id="text2">PHP <?php echo $row["price"]; ?></span></td>
						<td><input type="submit" name="add_to_cart" class="addcart" value="Add to Cart" /></td>
						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_size" value="<?php echo $row["product_size"]; ?>" />
						
						<!--SECOND-->
						
					</table>
					
				</form>
			</div>
		<?php
					}
				}
			?>
				</span>
			
		</div>
	</div>
	</div>
	<!--product-9-->
	<div id="myModal9" class="modal9">
			<div class="modal-content9">
				<span class="close9">&times;</span>
					<span><h1 style="text-align:center;margin-top:-10vh;">CHOOSE YOUR ORDER</h1>
			<?php
			$query = "SELECT * FROM product_detail_table WHERE ID IN (17,18) ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="table-responsive">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<table>
					<tr class="trtop">
						<th>PRODUCT</th>
						<th>QUANTITY</th>
						<th>SIZE</th>
						<th>PRICE</th>
						<th>ACTION</th>
					</tr>
						<tr><td><img src="../imgs/<?php echo $row["product_image"]; ?>" class="m" /><h4 class='pdOverlayname'><?php echo $row["product_name"]; ?></h4><br /></td>
						<td><div class="counter">
							<span class="down" onClick="decreaseCount(event, this)">-</span>
							<input type="text" name="quantity" value='0'>
							<span class="up"  onClick="increaseCount(event, this)">+</span>
						</div></td>
						<td><div class="sizepricebg"><span id="text2"><?php echo $row["product_size"]?></span></td>
						<td><div class="sizepricebg"/><span id="text2">PHP <?php echo $row["price"]; ?></span></td>
						<td><input type="submit" name="add_to_cart" class="addcart" value="Add to Cart" /></td>
						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_size" value="<?php echo $row["product_size"]; ?>" />
						
						<!--SECOND-->
						
					</table>
					
				</form>
			</div>
		<?php
					}
				}
			?>
				</span>
			
		</div>
	</div>
	</div>
			<ul>
				<li>
			
					<div class="card2">
						<img class="c2img" src="../imgs/p1.jpg" alt="">
						<div class="card-content">
							<h2> SUPREME</h2>
							<h3> Pizza sauce, mozzarella, quiu, bacon bits, beef, pepperoni, bell pepper, white onion, pineapple bits, olives, herbs and seasoning </h3>
							<button class="submit" type="submit" name="add1" id="myBtn1"><span>ADD TO<img class="addtocart" src="../imgs/CART.png"></span></button>
						</div>
					</div>
			
				</li>
				<li>
			
					<div class="card2">
						<img class="c2img" src="../imgs/p2.jpg" alt="">
						<div class="card-content">
							<h2> GARLIC AND SHRIMP</h2>
							<h3>  Pizza sauce, mozzarella, quickmelt, garlis butter, lemon, shrimp, herbs and seasoning </h3>
							<br>
							<button class="submit" type="submit" name="add2" id="myBtn2"><span>ADD TO<img class="addtocart" src="../imgs/CART.png"></span></button>
						</div>
					</div>
				
				</li>
				<li>
				
					<div class="card2">
						<img class="c2img" src="../imgs/p3.jpg" alt="">
						<div class="card-content">
							<h2> MARGHERITA </h2>
							<h3> Pizza sauce, mozzarella, quuckmelt, tomato, basil, herbs and seasoning </h3>
							<br>
							<button class="submit" type="submit" name="add1" id="myBtn3"><span>ADD TO<img class="addtocart" src="../imgs/CART.png"></span></button>
						</div>
					</div>
				
				</li>
			</ul>
			<ul>
				<li>
				
					<div class="card2">
						<img class="c2img" src="../imgs/p4.jpg" alt="">
						<div class="card-content">
							<h2> HAWAIIAN </h2>
							<h3> Pizza sauce, mozzarella, quickmelt, bacon bits, ham bits, ham squre, pineapple bits, herbs and seasoning </h3>
							<button class="submit" type="submit" name="add1" id="myBtn4"><span>ADD TO<img class="addtocart" src="../imgs/CART.png"></span></button>
						</div>
					</div>
				
				</li>
				<li>
				
					<div class="card2">
						<img class="c2img" src="../imgs/p5.jpg" alt="">
						<div class="card-content">
							<h2> PEPPERONI </h2>
							<h3> Pizza sauce, mozzarella, quickmelt, pepperoni, herbs and seasoning  </h3>
							<button class="submit" type="submit" name="add1" id="myBtn5"><span>ADD TO<img class="addtocart" src="../imgs/CART.png"></span></button>
						</div>
					</div>
				
				</li>
				<li>
				
					<div class="card2">
						<img class="c2img" src="../imgs/p6.jpg" alt="">
						<div class="card-content">
							<h2> BEEF AND MUSHROOM </h2>
							<h3> Pizza sauce, mozzrella, quickmelt, beef, mushroom, white onion, bell pepper, herbs and seasoning </h3>
							<button class="submit" type="submit" name="add1" id="myBtn6"><span>ADD TO<img class="addtocart" src="../imgs/CART.png"></span></button>
						</div>
					</div>
				
				</li>
			</ul>
			<ul>
				<li>
				
					<div class="card2">
						<img class="c2img" src="../imgs/p7.jpg" alt="">
						<div class="card-content">
							<h2> CHESSY BACON & HAM </h2>
							<h3> Pizza sauce, mozzarella, quickmelt,bacon bits, square ham, herbs and seasoning </h3>
							<button class="submit" type="submit" name="add1" id="myBtn7"><span>ADD TO<img class="addtocart" src="../imgs/CART.png"></span></button>
						</div>
					</div>
				
				</li>
				<li>
				
					<div class="card2">
						<img class="c2img" src="../imgs/p8.jpg" alt="">
						<div class="card-content">
							<h2> CHICKEN PESTO </h2>
							<h3> White pesto sauce, mozzarella, quickmelt, tomato, shiitake mushroom, chicken, basil, herbs and seasoning </h3>
							<button class="submit" type="submit" name="add1" id="myBtn8"><span>ADD TO<img class="addtocart" src="../imgs/CART.png"></span></button>
						</div>
					</div>
			
				</li>
				<li>
				
					<div class="card2">
						<img class="c2img" src="../imgs/p19.jpg" alt="">
						<div class="card-content">
							<h2> CREAMY PEPPERONI </h2>
							<h3> Pizza sauce, mozzarella, quickmelt, pepperoni, cream cheese, herbs and seasoning </h3>
							<button class="submit" type="submit" name="add1" id="myBtn9"><span>ADD TO<img class="addtocart" src="../imgs/CART.png"></span></button>
						</div>
					</div>
				
				</li>
			</ul>
		</section>

	</main>
	
	<footer>
		<div class="foot">
			<h3>CALLE FELIZ PIZZA</h3>
            <p>Cheese and Spice on every splice!</p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/CalleFelizPizza"><img src="../imgs/fb.png" alt="facebook"></a></li>
                <li><a href="#"><img src="../imgs/t.png" alt="twitter"></a></li>
				<li><a href="https://www.instagram.com/callefelizpizza/"><img src="../imgs/ig.png" alt="instagram"></a></li>
            </ul>
			
			<div class="footer-bottom">
				<p>copyright &copy; 2021. <a> ITPM. </a> All rights reserved.</p>
			</div>
		</div>
		
	</footer>
	
	
	
	<script type="text/javascript">
      function increaseCount(a, b) {
        var input = b.previousElementSibling;
        var value = parseInt(input.value, 10); 
        value = isNaN(value)? 0 : value;
        value ++;
        input.value = value;
      }
      function decreaseCount(a, b) {
        var input = b.nextElementSibling;
        var value = parseInt(input.value, 10); 
        if (value > 0) {
          value = isNaN(value)? 0 : value;
          value --;
          input.value = value;
        }
      }
    </script>
	<script>
	window.onclick = function(event) {
		if (event.target == modal1) {
			modal1.style.display = "none";
		} 
		if (event.target == modal2) {
			modal2.style.display = "none";
		} if (event.target == modal3) {
			modal3.style.display = "none";
		} 
		if (event.target == modal4) {
			modal4.style.display = "none";
		} 
		if (event.target == modal5) {
			modal5.style.display = "none";
		} 
		if (event.target == modal6) {
			modal6.style.display = "none";
		} 
		if (event.target == modal7) {
			modal7.style.display = "none";
		} 
		if (event.target == modal8) {
			modal8.style.display = "none";
		} 
		if (event.target == modal9) {
			modal9.style.display = "none";
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
}	/*2nd modal*/
	var modal2 = document.getElementById("myModal2");
	var btn2 = document.getElementById("myBtn2");
	var span2 = document.getElementsByClassName("close2")[0];

	btn2.onclick = function() {
		modal2.style.display = "block";
	}

	span2.onclick = function() {
	modal2.style.display = "none";
}	
	/*3rd modal*/
	var modal3 = document.getElementById("myModal3");
	var btn3 = document.getElementById("myBtn3");
	var span3 = document.getElementsByClassName("close3")[0];

	btn3.onclick = function() {
		modal3.style.display = "block";
	}

	span3.onclick = function() {
	modal3.style.display = "none";
}	
/*4th modal*/
	var modal4 = document.getElementById("myModal4");
	var btn4 = document.getElementById("myBtn4");
	var span4 = document.getElementsByClassName("close4")[0];

	btn4.onclick = function() {
		modal4.style.display = "block";
	}

	span4.onclick = function() {
	modal4.style.display = "none";
}	
/*5th modal*/
	var modal5 = document.getElementById("myModal5");
	var btn5 = document.getElementById("myBtn5");
	var span5 = document.getElementsByClassName("close5")[0];

	btn5.onclick = function() {
		modal5.style.display = "block";
	}

	span5.onclick = function() {
	modal5.style.display = "none";
}	
/*6th modal*/
	var modal6 = document.getElementById("myModal6");
	var btn6 = document.getElementById("myBtn6");
	var span6 = document.getElementsByClassName("close6")[0];

	btn6.onclick = function() {
		modal6.style.display = "block";
	}

	span6.onclick = function() {
	modal6.style.display = "none";
}	
/*7th modal*/
	var modal7 = document.getElementById("myModal7");
	var btn7 = document.getElementById("myBtn7");
	var span7 = document.getElementsByClassName("close7")[0];

	btn7.onclick = function() {
		modal7.style.display = "block";
	}

	span7.onclick = function() {
	modal7.style.display = "none";
}	
/*8th modal*/
	var modal8 = document.getElementById("myModal8");
	var btn8 = document.getElementById("myBtn8");
	var span8 = document.getElementsByClassName("close8")[0];

	btn8.onclick = function() {
		modal8.style.display = "block";
	}

	span8.onclick = function() {
	modal8.style.display = "none";
}	
/* 9th modal*/
	var modal9 = document.getElementById("myModal9");
	var btn9 = document.getElementById("myBtn9");
	var span9 = document.getElementsByClassName("close9")[0];

	btn9.onclick = function() {
		modal9.style.display = "block";
	}

	span9.onclick = function() {
	modal9.style.display = "none";
}	
	</script>
</body>
</html>
