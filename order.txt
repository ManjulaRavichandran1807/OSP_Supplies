<?php
	include 'connection.php';
    error_reporting(0);

    if (isset($_POST['email']) && isset($_POST['password'])) {
    	$email = $_POST[ 'email' ];
    	$password = $_POST[ 'password' ];
    	$query = "SELECT * FROM register WHERE email = '".$email."'";
    	$result = mysqli_query($conn, $query);
    	if ($result) {
    		$row = mysqli_num_rows($result);
    		if ($row!=0) {
    			while($reslt = $result->fetch_assoc()) {
	    			if ($password == $reslt["password"]) {
	    				session_start();
	    				$_SESSION["firstname"] = $reslt["firstname"];
	    				$_SESSION["lastname"] = $reslt["lastname"];
	    				$_SESSION["email"] = $reslt["email"];
	    				$_SESSION["password"] = $reslt["password"];

	    				//echo $_SESSION["firstname"];
	    			}else{
    			        session_destroy();
    			        header("Location: index.php");
    		        }
	  			}
    		} 
    	}
    } else {
    	session_destroy();
    	header("Location: index.php");
    }
?>
<html>
<head>
    <title>ORDER</title>
    <link href="./bundles/css/order.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="bgimg" style="background-image: .\bundles\medicine.jpg;">
	    <div class="layer">
			<div class="wrapper">
			    <div class="form-inner-cont">
					<div class="form-info">
						<u><b><h1>OSP SUPPLIES</h1></b></u>
						<h2>ORDER PLACEMENT</h2><br><br>
					</div>
					<div class="form-right-inf">
					    <form action="bill.php" method="post">
					    <div class="form-input">
						    <h3><label for="product">PRODUCT : </label>
					        <input type="text" name="product" placeholder="Product" required=""></h3><br>
					    </div>
					    <div class="form-input">
						   <h3><label for="quantity">QUANTITY : </label>
						    <input type="text" name="quantity" placeholder="Quantity" required=""></h3><br>
					    </div>
						<div class="form-input">
						<h4>
						    <label for="product_type"> PRODUCT TYPE : </label>		
					        <select id="product_type" name="product_type">
					        	<option value="---">---</option>
                                <option value="syp">SYRUP</option>
                                <option value="tab">TABLET</option>
                                <option value="cap">CAPSULE</option>
                                <option value="oint">OINTMENT</option>
                                <option value="syrn">SYRINGE</option>
                            </select>
                        </h4>
					    </div>
						<div class="form-input">                                                                        
					        <button class="btn">ORDER</button>
					    </div>
					    </form>
					</div>
					<div class="form-input">                                                                        
					    <button type="button" class="btn" onclick="logout(); return false;">LOG OUT</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var logout = function() 
		{
			location.replace("index.php");
		}
	</script>
</body>
</html>