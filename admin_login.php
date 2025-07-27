 <?php
	session_start();

	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="product_detail"; //DATABASE NAME

	$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname); //CONNECTION TO DATAVASE
	
	$admin_username = $_POST['admin_username'];
	$admin_password = $_POST['admin_password']; //FIELD NAMES FOR LOGIN TABLE
	
	/*if (!empty($username)){ //MASSAGES IF EMPTYif (!empty($password)){}else { echo "<!DOCTYPE HTML> <HTML Lang='en-US'> <body> Password CANNOT be EMPTY! </BODY> </HTML>"; die();}}
	else { echo "<!DOCTYPE HTML> <HTML Lang='en-US'> <body>Username CANNOT be EMPTY! </BODY> </HTML>"; die();}*/
	
	$s = "SELECT * FROM admin_account WHERE admin_username='$admin_username' && admin_password = '$admin_password'"; //CALLING OUT WHICH FIELD NAMES TO USE
	
	$result = mysqli_query($conn,$s);
	
	$num = mysqli_num_rows($result);
	
	if ($num == 1) {
				include_once('adminpg.php');
				echo"<html>
				<body>
				<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
				<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
				<script type='text/javascript'>
				$(function(){
				Swal.fire(
				'Successfuly Log in!',
				'Click ok to proceed!',
				'success'
				)});
				</script>
				</body>
				</html>
                "; 
				 } //WHERE TO GO IF LOGIN IS SUCCESS
	else { 		
				include_once('main.html');
				echo"<html>
				<body>
				<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
				<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
				<script type='text/javascript'>
				$(function(){
				Swal.fire(
				'Wrong email or password',
				'Click ok to proceed!',
				 'error'
				)});
				</script>
				</body>
				</html>
                "; } //MASSAGE IF THERE'S AN ERROR SUCH AS WRONG PASSWORD OR WRONG USERNAME
				
 ?>