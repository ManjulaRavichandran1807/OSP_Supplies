<?php
    
    include 'connection.php';
    if (isset($_POST["product"]) && isset($_POST["quantity"]) && isset($_POST["product_type"])) {
    	$product = $_POST["product"];
		$quantity = $_POST["quantity"];
		$product_type = $_POST["product_type"];
		$sql = "SELECT unit_price FROM products WHERE product = '".$product."' and product_type = '".$product_type."'";
		//echo $sql;
		if ($result = $conn->query($sql)) {
			$rowss = mysqli_num_rows($result);
			if ($rowss > 0) {
				while($row = $result->fetch_assoc()) {
			    	$unitPrice = $row["unit_price"];
			    	$totalPrice = intVal($quantity) * intVal($unitPrice);
		  		}
			} else {
				$totalPrice = 0;
			}
		} else {
			$totalPrice = 0;
		}
		
    }
?>
<html>
<head>
    <title>PAYMENT</title>
    <link href="./bundles/css/bill.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="bgimg" style="background-image: .\bundles\medicine.jpg;">
	    <div class="layer">
			<div class="wrapper">
			    <div class="form-inner-cont">
					<div class="form-info">
						<u><b><h1>OSP SUPPLIES</h1></b></u>
						<h2>BILL  PAYMENT</h2><br><br>
					</div>
					<div class="form-right-inf">
					    <form>
					    <h3><div class="form-input">
						    <label>AMOUNT TO BE PAID : </label>
						    <?php 
						    	echo "<input type='text' value=".$totalPrice.">";
						    ?>
						</div></h3>
					    <div class="form-input">                                                                        
					        <button type="button" class="btn" onclick="success(); return false;">PAY</button><br>
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
		var success = function() {
			alert("Payment successful");
		}
	</script>
	<script type="text/javascript">
		var logout = function() 
		{
			location.replace("index.php");
		}
	</script>
</body>
</html>