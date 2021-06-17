<?php 
	include 'connection.php';
	error_reporting(0);

	session_destroy();

	if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cnfmPwd'])) {
    	$firstName = $_POST['firstname'];
    	$lastName = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cnfmPwd = $_POST['cnfmPwd'];
		if ($password!=$cnfmPwd){
			header("Location: register.php");
		}
		$sql = "INSERT INTO REGISTER(firstname, lastname, email, password) VALUES('".$firstName."', '".$lastName."', '".$email."', '".$password."')";

		if ($result = $conn -> query($sql)) {
			// Data inserted into table 
		}
	}
?>
<html>
<head>
    <title>LOGIN</title>
    <link href="./bundles/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="bgimg" style="background-image: .\bundles\medicine.jpg; outline: none; cursor: inherit;">
	    <div class="layer">
			<div class="wrapper">
			    <div class="form-inner-cont">
					<div class="form-info">
						<u><b><h1>OSP SUPPLIES</h1></b></u>
						<h2>LOGIN</h2>
					</div>
					<div class="form-right-inf">
					    <form action="order.php" method="post">
					    <div class="form-input">
					        <input type="email" name="email" placeholder="Email" required=""><br><br>
					    </div>
					    <div class="form-input">
					        <input type="password" name="password" placeholder="Password" required=""><br><br>
					    </div>
					    <div class="form-input">
					        <button class="btn">LOGIN</button><br><br>
					    </div>
					    <h4 class="default">Don't have an account ? 
					        <a href="register.php"><h3>Register Here</h3></a>
					    </h4>
					    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>