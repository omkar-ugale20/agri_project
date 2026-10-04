<?php ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/loginn.css">
	<title>Agriculture</title>
</head>
<body>
<nav>
	<div class="logo">
		<a href="">AGRICULTURE</a>
	</div>
	<ul>
		<li><b><a href="index.php">HOME</a></b></li>
		<li><b><a href="cropp.php">CROPS</a></b></li>
		<li><b><a href="pesticides.php">PESTICIDES</a></b></li>
		<li><b><a href="equip.php">EQUIPMENTS</a></b></li>
		<li><b><a href="loginn.php">LOGIN</a></b></li>
		<li><b><a href="reviews.php">REVIEWS</a></b></li>
	</ul>
</nav>
<div class="loginbox">
	<img src="img/login.jpg" class="avatar" alt="Avatar Image">
	<h1>Login Here</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<p>Username</p>
		<input type="text" name="username" placeholder="Enter Username" required>
		<p>Password</p>
		<input type="password" name="password" placeholder="Enter Password" required><br><br>
		<input type="submit" name="login" value="Login">
		<br><br>
		<a href="#">Lost your password?</a><br>
		<a href="#">Don't have an account?</a>
	</form>
	<a href="index.php">
		<button class="button button1">Back</button>
	</a>
</div>
<?php
// Simple login demo (no database)
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // dummy check
    if($user == "admin" && $pass == "1234"){
        echo "<script>alert('Login Successful!');</script>";
    } else {
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?>
</body>
</html>