<!DOCTYPE html>
<html lang="eng/ie">
	<head>
		<title>Medical Log In Portal</title>
		<link rel="stylesheet" href="form.css" />
		<meta charset="UTF-8" />
	</head>
	<body>

	<div class="form-container sign-in-container">
		<a href="../index.html" id="homeButton"> << BACK</a>
		<form action="login.php" onsubmit="return passCheck()" method="POST">
			<h1>MEDICAL STAFF LOG IN PORTAL</h1>
			<div class="social-container">
				<a href="#" class="social"><image id="fb" src="images/facebook.png" /></a>
				<a href="#" class="social"><image id="twitter" src="images/twitter.png" /></a>
				<a href="#" class="social"><image id="googleplus" src="images/googleplus.png" /></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="password" />
			<a href="forgotPassword.html">Forgot your password?</a>
			<button>Sign In</button>
			<a href="doctorSignup.php">Sign Up</a>
		</form>





		</div>
	</body>






</html>
