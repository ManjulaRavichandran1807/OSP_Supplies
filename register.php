<html>
<head>
	<title>REGISTER</title>
	<link href="./bundles/css/register.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="bgimg" style="background-image: bundles\medicine.jpg; outline: none; cursor: inherit;">
		<div class="layer">
			<div class="wrapper">
				<div class="form-inner-cont">
					<div class="form-info">
						<u><b><h1>OSP SUPPLIES</h1></b></u>
						<h2>SIGN  UP</h2>
					</div>
					<div class="form-right-inf">
						<form action="index.php" method="post">
						<div class="form-input">
							<input type="text" name="firstname" placeholder="Firstname" required=""><br><br>
						</div>
						<div class="form-input">
							<input type="text" name="lastname" placeholder="Lastname" required=""><br><br>
						</div>
						<div class="form-input">
							<input type="email" name="email" placeholder="Email" required=""><br><br>
						</div>
						<div class="form-input">
							<input type="password" name="password" placeholder="Password" required=""><br><br>
						</div>
						<div class="form-input">
							<input type="password" name="cnfmPwd" placeholder="Confirm Password" required=""><br><br>
						</div>
						<div class="form-input">
						    <button class="btn">SIGN UP</button><br><br>						
						</div>
					    <h4 class="default">Already have an account ? 
					        <a href="index.php"><h3>Login Here</h3></a>
					    </h4>
					    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>