<?php // require('./server/app.php'); ?>

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

    <title>get nerfed! | Contact</title>
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
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="contact.php">Contact us</a></li>
            </ul>
            
            <div class="nav-aside" id="navAside">
                <!-- Login -->
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
            <form id="login_form" name="login" class="modal-content animate" action="<?php // echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <!-- close button -->
                <div class="imgcontainer">
                    <span onclick="closeForm()" class="close" title="Close Modal">&times;</span>
                    <img src="images/icons/img_avatar.png" alt="Avatar" class="form-avatar-img">
                </div>

                <!-- input fields -->
                <div class="input-container">
                    <label for="uname"><b>Username</b></label>
                    <input id="username_input" type="text" placeholder="Enter Username" name="username" value="<?php // echo $username; ?>">

                    <label for="psw"><b>Password</b></label>
                    <input id="password_input" type="password" placeholder="Enter Password" name="psw" value="<?php // echo $password; ?>">
                        
                    <button id="login" name="submitLogin" value="Register" type="submit" >Log in</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember">
                        Remember Me
                    </label>

                    <h3 class="required-field"><?php // echo $loginFormErr; ?></h3>

                    
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

    <main class="contact-us">
        <!-- Introduction -->
        <section class="intro">

            <img class="intro-image" src="images/mainpage.jpg" alt="introduction image">
            <h1 class="section-title section-title_intro" >
                contact us
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
        </section> <!-- </ introduction > -->

        <!-- Welcome message display --> 
        <p id="welcome-msg"></p>

         <!--Get in touch-->
        <section>
            <h2 class="form-title">GET IN TOUCH</h2>
            <div class="flex-container">
                <div class="card">
                    <figure><img class="icon" src="images/icons/home.png" alt="Address"></figure>
                    <h3>Address</h3>
                    <div class="text">
                        <em>Rhodes University, Drosty Rd, Grahamstown, Makhanda, 6139</em>
                    </div>
                </div>

                <div class="card">
                    <figure><img class="icon" src="images/icons/telephone-call.png" alt="Phone"></figure>
                    <h3>Phone</h3>
                    <div class="text">
                        <em>0985863425</em>
                    </div>
                </div>

                <div class="card">
                    <figure><img class="icon" src="images/icons/email.png" alt="Email"></figure>
                    <h3>Email</h3>
                    <div class="text">
                        <em>getnerfed@gmail.com</em>
                    </div>
                </div>
            </div>
        </section> <!-- </ get in touch > -->


        <!-- Contact us -->
        <section>
            <!-- section title -->
            <h2 class="form-title">Contact Us</h2>
            <p class="form-subtitle">
                <em>Please use this form to contact us and
                    we will try to get back to you assoon as possible!
                </em>
            </p>

            <!-- Contact form -->
            <form name="contact" class="contact" action="<?php // echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <fieldset class="fieldset-contact">
                    <!-- form title -->
                    <legend class="legend-contact">
                        <strong>Details</strong>
                    </legend>

                    <p class="required-field">* Required</p>

                    <!-- first name input -->
                    <label for="name">Name</label>
                    <input placeholder="First Name" type="text" name="fname" id="name" value="<?php // echo $fname; ?>">
                    <span class="error-form required-field">* <?php // echo $fnameErr; ?></span>
                   
                    <!-- surname input -->
                    <label for="surname"></label>
                    <input placeholder="Last Name" type="text" name="surname" id="surname" value="<?php // echo $surname ?>">
                    <span class="error-form required-field">* <?php // echo $surnameErr ;?></span>
                    <br><br>

                    <!-- email input -->
                    <label for="email">Email</label>
                    <input placeholder="e.g. rhodesCS3@gmail.com" type="text" name="email" id="email" value="<?php // echo $email; ?>">
                    <span class="error-form required-field">* <?php // echo $emailErr; ?></span>
                    <br><br>

                    <!-- suject option list -->
                    <label for="subject">Subject</label>
                    <select class="select-list" name="subject" id="subject">
                        <option value="Customer Support">Customer Support</option>
                        <option value="Game Recommendation">Game Recommendation</option>
                        <option value="Review">Review</option>
                        <option value="Feedback">Feedback</option>
                        <option value="Other">Other</option>
                    </select>
                    <br><br>

                    <!-- user/customer message field -->
                    <div class="form-align"><label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10"><?php // echo $message; ?></textarea>
                    </div>
                    <span class="error-form required-field">* <?php // echo $messageErr; ?></span>
                    
                    <br><br>
                    <span class="error"><?php // echo $contactFormErr; ?></span>
                    <br><br>
                    <span class="success"><?php // echo $contactFormSuccess; ?></span>
                    <br><hr><br>

                    <!-- submit button -->
                    <input class="submit" type="submit" value="Submit" name="submitContact">

                </fieldset>
            </form> <!-- </contact form> -->
        </section> <!-- </contact us> -->

        <!-- Lucky draw -->
        <section>
            <!-- section title -->
            <h2 class="form-title">Enter our lucky draw!</h2>
            <h2 id="present" onclick="movePresent(this);">🎁</h3>

            <p class="form-subtitle">
            <em>We are giving away one free copy of
                <strong>GTA V</strong> to one lucky
                customer! Enter now to standa chance to win!</em>
            </p>

            <!-- prize form -->
            <form name="prize" class="prize" action="<?php // echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <fieldset class="fieldset-prize">
                    <!-- form title -->
                    <legend class="legend-prize">
                        <strong>Fill in your details below</strong>
                    </legend>

                    <p style="color: var(--color-sec-accent);">* Required</p>

                    <!-- first name input -->
                    <label for="name">Name</label>
                    <input placeholder="First Name" type="text" name="pfname" id="name" value="<?php // echo $pfname; ?>">
                    <span style="color: var(--color-sec-accent);" class="error-form">* <?php // echo $pfnameErr; ?></span>
                   
                    <!-- surname input -->
                    <label style="width: 50px;" for="surname"></label>
                    <input placeholder="Surname" type="text" name="psurname" id="surname" value="<?php // echo $psurname; ?>">
                    <span style="color: var(--color-sec-accent);" class="error-form">* <?php // echo $psurnameErr; ?></span>
                    <br><br>
                   
                    <!-- phone number input -->
                    <label for="phone">Phone</label>
                    <input placeholder="Phone-Number" type="tel" name="pphone" id="phone" value="<?php // echo $pphone; ?>">
                    <span style="color: var(--color-sec-accent);" class="error-form">* <?php // echo $pphoneErr; ?></span>
                    
                    <br><br>
                    <span class="error"><?php // echo $prizeFormErr; ?></span>
                    <br><br>
                    <span class="success"><?php // echo $prizeFormSuccess; ?></span>
                    <br><hr><br>

                    <!-- submit button -->
                    <input class="submit" type="submit" value="Enter now!" name="submitPrize">
                </fieldset>
            </form> <!-- </ prize form> -->
        </section> <!-- </ lucky draw section> -->


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