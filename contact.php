<?php 
    require("components/head.inc.php");
    // require('./server/app.php'); 
?>

    <title>get nerfed! | Contact</title>
</head>

<body>
    <header>
        <!-- Nav section-->
        <div class="navbar">
            <nav class="nav-main" id="navMain">
                <!-- Logo Component -->
                <?php require("components/logo.inc.php"); ?>

                <!-- Navbar -->
                <ul class="nav-list">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact us</a></li>
                </ul>
                
                <!-- Login Button Component -->
                <?php require("components/login.btn.inc.php"); ?>         
                
            </nav>

            <!-- Login Modal Component -->
            <?php require("components/login.modal.inc.php"); ?> 

        </div> <!-- </ Nav section > -->
    </header>

    <main class="contact-us">
        <!-- Introduction -->
        <section class="intro">

            <img class="intro-image" src="images/mainpage.jpg" alt="introduction image">
            <h1 class="section-title section-title_intro" >
                contact us
            </h1>

            <!-- Dropdown Theme Menu Component -->
            <?php require("components/theme.menu.inc.php"); ?> 

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

    <?php require("components/footer.inc.php"); ?>

    <script src="js/script.js"></script>

    <!-- Username and welcome Msg Component -->
    <?php require("components/welcome.msg.inc.php"); ?> 

</body>

</html>