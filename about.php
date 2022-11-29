<?php //require('./server/app.php'); ?>

<!DOCTYPE html>
<html lang="en">

<!-- Team Members: -->
<!--    Anil Abraham -->
<!--    Siyabonga Fortune -->
<!--    Timothy Williams -->

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

    <title>get nerfed! | About </title>
</head>

<body>
    <header>
        <!-- Nav section-->
        <div class="navbar">
            <nav class="nav-main" id="navMain">
                <div class="logo">
                    <img class="logo-img" src="images/icons/logo1.png" alt="logo image">
                    <h1 class="logo-title" >get nerfed!</h1>
                </div>

                <!-- Navbar -->
                <ul class="nav-list">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
                </ul>
                
                <div class="nav-aside" id="navAside">
                    <!-- Login button -->
                    <div class="login">
                        <button  class="login-btn" type="submit" onclick="displayLoginForm()">
                            <a href="#" class="avatar">
                                <img src="images/icons/img_avatar.png" alt="Avatar" class="avatar-img">
                            </a> 
                            &nbsp; <div id="user_btn_text">Login</div>
                        </button>
                    </div>
                    
                    <a href="javascript:void(0);" class="hamburger-icon" onclick="toggleMobileMenu()">
                        <i class="fa fa-bars"></i>
                    </a>

                </div>   
                
            </nav>

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
    </header>

    <main class="about-us">
        <!-- Introduction -->
        <section class="intro">

            <img class="intro-image" src="images/mainpage.jpg" alt="introduction image">
            <h1 class="section-title section-title_intro" >
                about us
            </h1>

            <div class="dropdown">
                <button class="dropbtn">
                    <i class="fa fa-gear fa-spin" ></i>
                    <i class="fa fa-caret-down"></i>
                </button>
                
                <div class="dropdown-content">
                    <button id="sys_info" class="sys-info" >System Info</button>
                    <div class="settings">
                        <div class="custom-select">
                            <select id="theme_list" class="select-list">
                                <option class="select-item" value="0">Theme:</option>
                                <option class="select-item" value="1">Fury</option>
                                <option class="select-item" value="2">Vibrant Sky</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="diagonal-bg"></div>
        </section>

        <p id="welcome-msg"></p>

        <section class="all-cards">
            <!-- anil's card -->
            <div class="card-container">
                <div id="afront" class="front" onclick="frontFlipA()">
                    <img class="profile-img" src="images/anil.jpg" alt="Anil">
                    <h3 class="profile-name">Anil Abraham</h3>
                </div>

                <div id="aback" class="back" onclick="frontFlipA()">
                    <p class="profile-skills">
                    Does CSC3 and IS and has over 140 000 views on YouTube. 
                    He plays roblox and team fortress 2.
                    <br><br>
                    <b>Skills:</b> CSS, JavaScript
                    </p><!--text-->
                </div>
            </div>
            <!-- siya's card-->
            <div class="card-container">
                <div id="sfront" class="front" onclick="frontFlipS()">
                    <img class="profile-img" src="images/siya.jpg" alt="">
                    <h3 class="profile-name">Siyabonga Fortune</h3>
                </div>
                <div id="sback" class="back" onclick="frontFlipS()">
                    <p class="profile-skills">
                        Aspiring MERN stack and PHP Web Developer and currently 
                        engaging in a game development project. 
                        <br><br>
                        <b>FullStack Developer</b>
                    </p><!--text-->
                </div>
            </div>

             <!-- tim's card-->
            <div class="card-container">
                <div id="tfront" class="front" onclick="frontFlipT()">
                    <img class="profile-img" src="images/tim.jpg" alt="">
                    <h3 class="profile-name">Tim Williams</h3>
                </div>
                <div id="tback" class="back" onclick="frontFlipT()">
                    <p class="profile-skills">
                        He is a CSC and Enviros student who spends his free time learning how to grow tasty food.
                        <br><br>
                        <b>Skills:</b> HTML, CSS
                    </p><!--text-->
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">

        <nav class="nav-main">
            <div class="title-copyright">
                <h3 class="logo-title">get nerfed!</h3>
                <p class="copyright">Copyright &copy; 2022. South Africa</p>
            </div>
            
            <!-- Navbar -->
            <ul class="nav-list">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
            </ul>

            <!-- social media section -->
            <div class="social">
                <ul class="social-list">
                  <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook" ></i></a></li>
                  <li><a target="_blank" href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a></li>
                  <li><a target="_blank" href="https://www.github.com/"><i class="fa fa-github"></i></a></li>
                  <li><a target="_blank" href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </nav>
    </footer>

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