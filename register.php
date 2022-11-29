<?php require('./server/app.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/icons/logo1.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Lato:wght@300&family=M+PLUS+1+Code&display=swap" rel="stylesheet"> 

    <title>get nerfed! | Register </title>
</head>

<header>
   <!-- Nav section-->
   <div class="navbar">
	<!-- Login form -->
	<div id="form_container" class="modal">
		<form id="login_form" name="login" class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<!-- close button -->
			<div class="imgcontainer">
				<span onclick="closeForm()" class="close" title="Close Modal">&times;</span>
				<img src="images/icons/img_avatar.png" alt="Avatar" class="form-avatar-img">
			</div>

			<!-- input fields -->
			<div class="input-container">
				<label for="uname"><b>Username</b></label>
				<input id="username_input" type="text" placeholder="Enter Username" name="username" value="<?php echo $username; ?>">

				<label for="psw"><b>Password</b></label>
				<input id="password_input" type="password" placeholder="Enter Password" name="psw" value="<?php echo $password; ?>">
					
				<button id="login" name="submitLogin" value="Register" type="submit" >Log in</button>
				<label>
					<input type="checkbox" checked="checked" name="remember">
					Remember Me
				</label>

				<h3 class="required-field"><?php echo $loginFormErr; ?></h3>

				
			</div>

			 <!-- form footer -->
			<div class="helper-container">
				<button type="button" onclick="closeForm()" class="cancelbtn">Cancel</button>
				<span class="register-btn"><a href="register.php">Register</a></span>
				<span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		</form>
	</div>
</div> <!-- </ Nav section > -->
</header>

<body>
    <form class="register-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

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
					<input placeholder="First Name" type="text" name="fname" id="name" value="<?php echo $fname; ?>">
                    <input placeholder="Last Name" type="text" name="surname" id="surname" value="<?php echo $surname ?>">
				</div>

				<!-- Username and email -->
				<input placeholder="Email" type="text" name="email" id="email" value="<?php echo $email; ?>">
				<input type="text" placeholder="Username" name="username" id="username" value="<?php echo $username; ?>">

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

				<input type="password" placeholder="Enter Password" name="psw" id="psw" value="<?php echo $password; ?>">
				<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" value="<?php echo $passwordRepeat; ?>">
				<hr>

				<h3 class="required-field"><?php echo $registerFormErr; ?></h3>

				<p >By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
			
				<input name="submitRegister" value="Register" type="submit" class="registerbtn">
			</div>
			
			<div class="container signin">
				<a class="home" href="index.php">Back To Home</a>
				<p>Already have an account? <a id="login_redirect" href="#">Log in</a>.</p>
			</div>
		</div>

    </form>

		<!-- Welcome message display -->
		<p id="welcome-msg"></p>

    <script src="js/script.js"></script>

    <script>
        // get database connection status
        // $db->status declared in php file
        var connStatus = <?= json_encode($db->status) ?>;

        // dispplay status
        var welcomeMsg = document.getElementById("welcome-msg");
        welcomeMsg.innerHTML = connStatus + "<br>";
        welcomeMsg.style.display = "block";

        setTimeout(function(){ 
            welcomeMsg.style.display = "none";
        }, 7000); // timeout for status message

		var displayForm = <?= json_encode($displayForm) ?>;
		if (displayForm) {
			document.getElementById("form_container").style.display = 'block';
		}

		var isValidUser = <?= json_encode($isValidUser) ?>;
		var username = <?= json_encode($username) ?>;

		if (isValidUser) {
            // window.location.replace("index.php"); // redirect to main page
			document.getElementById("user_btn_text").textContent = username;

			welcomeMsg.innerHTML = "Welcome " + validUsername;
			welcomeMsg.style.display = "block";

			setTimeout(function(){ 
				welcomeMsg.style.display = "none";
			}, 7000); // timeout for welcome message
		}

    </script>
</body>
</html>