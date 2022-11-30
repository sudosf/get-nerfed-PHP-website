<?php 
	require("components/head.inc.php");
	// require('./server/app.php');
?>

    <title>get nerfed! | Register </title>
</head>

<header>
   <!-- Nav section-->
   <div class="navbar">
		<!-- Login Modal Component -->
		<?php require("components/login.modal.inc.php"); ?> 
	</div> <!-- </ Nav section > -->
</header>

<body>
    <form class="register-form" action="<?php // echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

		<!-- Introduction -->
		<div class="intro">
			<img class="intro-image" src="images/mainpage.jpg" alt="introduction image">

			<h1 class="section-title section-title_intro" >
				<span class="logo-title">
					<strong>get nerfed!</strong>
				</span>
			</h1>
			<h3 class="section-subtitle section-subtitle_intro">Register Account</h3>


		</div> <!-- </ intro > -->

		<div class="form-container">

			<div class="container">

				<div class="imgcontainer">
					<img src="images/icons/img_avatar.png" alt="Avatar" class="form-avatar-img">
				</div>
				
				<!-- Input fields -->
				<hr>
				<div class="name">
					<input placeholder="First Name" type="text" name="fname" id="name" value="<?php // echo $fname; ?>">
                    <input placeholder="Last Name" type="text" name="surname" id="surname" value="<?php // echo $surname; ?>">
				</div>

				<!-- Username and email -->
				<input placeholder="Email" type="text" name="email" id="email" value="<?php // echo $email; ?>">
				<input type="text" placeholder="Username" name="username" id="username" value="<?php // echo $username; ?>">

				<!-- Gender -->
				<div class="gender">
					<legend>Gender:</legend>
					<div class="male">
						<input type="radio" name="gender" id="male" value="male" checked >
						<label for="male">Male</label>
					</div>
					<div class="female">
						<input type="radio" name="gender" id="female" value="female">
						<label for="female">Female</label>
					</div>

					<div class="other">
						<input type="radio" name="gender" id="other" value="other">
						<label for="other">Other</label>
					</div>
				</div>

				<input type="password" placeholder="Enter Password" name="psw" id="psw" value="<?php // echo $password; ?>">
				<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" value="<?php // echo $passwordRepeat; ?>">
				<hr>

				<h3 class="required-field"><?php // echo $registerFormErr; ?></h3>

				<p >By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
			
				<input name="submitRegister" value="Register" type="submit" class="registerbtn">
			</div>
			
			<div class="container signin">
				<a class="home" href="index.php">Back To Home</a>
				<p>Already have an account? <a id="login_redirect" href="#">Log in</a>.</p>
			</div>
		</div>

    </form>

    <script src="js/script.js"></script>

</body>
</html>