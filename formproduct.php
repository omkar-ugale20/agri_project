<?php ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/formproduct.css">
</head>
<body>
<div class="container">
	<div class="title">For purchasing product:</div>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="user-details">
			<div class="input-box"><span class="details">Full Name:</span><input type="text" placeholder="Enter your name" required></div>
			<div class="input-box"><span class="details">Contact No.:</span><input type="tel" placeholder="Enter your contact no." required></div>
			<div class="input-box"><span class="details">Email:</span><input type="email" placeholder="Enter your email" required></div>
			<div class="input-box"><span class="details">Address:</span><input type="text" placeholder="Enter your address" required></div>
			<div class="input-box"><span class="details">Product Name:</span><input type="text" placeholder="Enter product name" required></div>
			<div class="input-box"><span class="details">Quantity of Product:</span><input type="number" placeholder="Enter quantity of product" required></div>
			<div class="input-box"><span class="details">Medium of payment:</span><input type="text" placeholder="Enter medium of payment" required></div>
		</div>
		<div class="button"><button type="submit" onclick="myalert()">Submit</button></div>
	</form>
	<div class="back-to-home"><a href="index.php">Back to Home</a></div>
</div>
<script>
	function myalert() {
		alert("Submit successful!");
	}
</script>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo "<script>myalert();</script>";
}
?>
</body>
</html>