<?php 
    require("components/head.inc.php");
    // require('./server/app.php'); 
?>

    <title>get nerfed! | Home </title>
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
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
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
                    
             <!-- content NavBar -->
            <nav class="nav-content" id="navContent">
                
                <div class="dropdown">
                    <button class="dropbtn">
                        <a href="#">GTA V</a> 
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#gtav-about">About</a>
                        <a href="#gtav-gallery">Gallery</a>
                        <a href="https://store.rockstargames.com/game/buy-gta-v" target="_blank">Buy</a>
                    </div>
                </div> <!-- / drop down menu -->
                 
                 <div class="dropdown">
                    <button class="dropbtn">
                        <a href="#">Assassin's Creed</a>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#assassins-creed-description">About</a>
                        <a href="#">Gallery</a>
                        <a href="https://store.ubi.com/us/game/?lang=en_US&pid=56c4948088a7e300458b46aa&dwvar_56c4948088a7e300458b46aa_Platform=pcdl&edition=Standard%20Edition&source=detail"
                        target="_blank" >Buy</a>
                    </div>
                </div> <!-- / drop down menu -->
                 
                 <div class="dropdown">
                    <button class="dropbtn">
                        <a href="#">Team Fortress 2</a>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#team-fortress-description">About</a>
                        <a href="#">Gallery</a>
                        <a href="https://store.steampowered.com/app/440/Team_Fortress_2/" target="_blank">Get It Now</a>
                    </div>
                </div> <!-- / drop down menu -->
               
            </nav>
        </div>

    </header>

    <main>
        <!-- Introduction -->
        <section class="intro">

            <img class="intro-image" src="images/mainpage.jpg" alt="introduction image">
            <h1 class="section-title section-title_intro" >
                Welcome to <span class="logo-title">
                    <strong>get nerfed!</strong>
                </span>
            </h1>
            <p class="section-subtitle section-subtitle_intro">Find the latest info on your favourite games</p>

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

        <!-- GTA V -->
        <section class="gtav">
            <!-- About -->
            <div id="gtav-about" class="about-game gtav-about-game">

                <div class="about-game-content-container">
                    <div class="game-logo">
                        <img class="game-logo-img" src="images/gtav/gtav-logo.jpeg" alt="">
                        <h2>Grand Theft Auto V</h2>
                    </div>
                    <p class="content">
                    “When a young street hustler, a retired bank robber and a terrifying psychopath
                    find themselves entangled with some of the most frightening and deranged elements 
                    of the criminal underworld, the U.S. government and the entertainment industry, 
                    they must pull off a series of dangerous heists to survive in a ruthless city in which 
                    they can trust nobody, least of all each other.”
                    </p>
                    <a class="read-more" href="#">Read More</a>
                </div>   

                <iframe width="560" height="315" src="https://www.youtube.com/embed/QkkoHAzjnUs"
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

            </div>

            <section class="gallery-gameplay">
                <h3 class="gallery-gameplay-title"> Gallery and GamePlay</h3>
                
                <!-- GamePlay -->
                <p class="gallery-gameplay-subtitle">
                    Explore the stunning world of Los Santos and Blaine County in the
                    ultimate Grand Theft Auto V experience, featuring a range of technical upgrades 
                    and enhancements for new and returning players.
                </p>

                <!-- Gallery -->
                <div id="gtav-gallery" class="gallery gtav-gallery">
                    
                    <div class="prev-container">
                        <a href="#" class="previous round">&#8249;</a>   
                    </div>

                    <img class="img-caption" src="images/gtav/gtav-caption.jpg" alt="gtav-caption-image">

                    <div class="next-container">
                        <a href="#" class="next round">&#8250;</a>
                    </div>

                    <div class="img-list"> 
                        <img src="images/gtav/gtav0.jpg" alt="gtav-image">
                        <img src="images/gtav/gtav1.jpg" alt="gtav-image">
                        <img src="images/gtav/gtav2.jpg" alt="gtav-image">
                        <img src="images/gtav/gtav3.jpg" alt="gtav-image">
                        <img src="images/gtav/gtav4.jpg" alt="gtav-image">
                        <img src="images/gtav/gtav5.jpg" alt="gtav-image">
                        <img src="images/gtav/gtav6.jpg" alt="gtav-image">
                    </div>
                </div>

            </section>

            <section class="ratings gtav-ratings" >
                <table class="ratings-table">
                    <caption class="table-title">Game Ratings</caption>
                    <tr class="header-list">
                        <th class="header-item">Stars</th>
                        <th class="header-item">Comment</th>
                        <th class="header-item">Reviews</th>
                    </tr>

                    <tr class="rating">
                        <td class="star-list">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </td>

                        <td class="comment">
                            <p>Awesome!</p>
                        </td>

                        <td class="reviews">
                            <a href="#">Read Reviews</a>
                        </td>
                    </tr>

                </table>
            </section>
        </section>

        <!-- Assassin's Creed -->
        <section class="ac">
            <!-- About -->
            <div id="ac-about" class="about-game ac-about-game">

                <div class="about-game-content-container">
                    <div class="game-logo">
                        <img class="game-logo-img" src="images/assassins-creed/ac-logo.png" alt="">
                        <h2>Assassin's Creed Black Flag</h2>
                    </div>
                    <p class="content">
                    "I once sailed for a king. I obeyed men of privilege and wealth.Now, I bend my knee to no man. 
                    My only oath is to my crew and together we will take back what is rightfully ours. With blood and steel, we shall stand up to the powerful. 
                    Captains will curse our flag, and kings will fear it. As long as empires generate wealth and riches, we will be there to bleed them dry."
                    </p>
                    <a class="read-more" href="#">Read More</a>
                </div>   

                <iframe width="560" height="315" src="https://www.youtube.com/embed/WdKIQSwkYHI" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>

            </div>

            <section class="gallery-gameplay">
                <h3 class="gallery-gameplay-title"> Gallery and GamePlay</h3>
                
                <!-- GamePlay -->
                <p class="gallery-gameplay-subtitle">
                Assassin's Creed IV: Black Flag is a 2013 action-adventure game, and the sixth main installment in the Assassin's Creed series. A sequel to 2012's
                Assassin's Creed III, the game has the player take on the role of an Abstergo Entertainment research analyst as
                they explore the story of Edward Kenway - father to Haytham Kenway, grandfather to Ratonhnhaké:ton, and an ancestor of Desmond Miles.
                Assassin's Creed IV: Black Flag is set primarily on and around the islands in the Caribbean Sea during the Golden Age of Piracy in the early 18th century,
                with the three major cities consisting of Havana, Nassau, and Kingston.
                </p>

                <!-- Gallery -->
                <div id="gtav-gallery" class="gallery ac-gallery">
                    
                    <div class="prev-container">
                        <a href="#" class="previous round">&#8249;</a>   
                    </div>

                    <img class="img-caption" src="images/assassins-creed/ac-caption.jpg" alt="assassin's-creed-caption-image">

                    <div class="next-container">
                        <a href="#" class="next round">&#8250;</a>
                    </div>

                    <div class="img-list"> 
                        <img src="images/assassins-creed/ac0.jpg" alt="ac-image">
                        <img src="images/assassins-creed/ac1.jpg" alt="ac-image">
                        <img src="images/assassins-creed/ac2.jpg" alt="ac-image">
                        <img src="images/assassins-creed/ac3.jpg" alt="ac-image">
                        <img src="images/assassins-creed/ac4.jpg" alt="ac-image">
                    </div>
                </div>

            </section>

            <section class="ratings ac-ratings" >
                <table class="ratings-table">
                    <caption class="table-title">Game Ratings</caption>
                    <tr class="header-list">
                        <th class="header-item">Stars</th>
                        <th class="header-item">Comment</th>
                        <th class="header-item">Reviews</th>
                    </tr>

                    <tr class="rating">
                        <td class="star-list">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </td>

                        <td class="comment">
                            <p>I can't get enough of this</p>
                        </td>

                        <td class="reviews">
                            <a href="#">Read Reviews</a>
                        </td>
                    </tr>

                </table>
            </section>
        </section>

        <!-- Team Fortress 2 -->
        <section class="tf2">
            <!-- About -->
            <div id="tf2-about" class="about-game tf2-about-game">

                <div class="about-game-content-container">
                    <div class="game-logo">
                        <img class="game-logo-img" src="images/tf2/tf2-logo.png" alt="">
                        <h2>Team Fortress 2</h2>
                    </div>
                    <p class="content">
                        "WHO SENT ALL THESE BABIES TO FIGHT?" <br>
                        Team Fortress 2 is an online multiplayer first-person shooter game, and the sequel to Team Fortress Classic.
                    </p>
                    <a class="read-more" href="#">Read More</a>
                </div>   

                <iframe width="560" height="315" src="https://www.youtube.com/embed/N7ZafWA2jd8" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>

            <section class="gallery-gameplay">
                <h3 class="gallery-gameplay-title"> Gallery and GamePlay</h3>
                
                <!-- GamePlay -->
                <p class="gallery-gameplay-subtitle">
                Released on 10 October 2007, 
                TF2 is a team-based game that features 9 various classes, where each class sports a unique playstyle that brings its own advantages to the tide of
                the game. Players can join one of two teams, RED and BLU, and play in game modes such as Capture the Flag and King of the Hill. TF2 is a free to play
                game and has been recognized as being one of the greatest video games ever made. There have been over 150 037 users playing TF2 at once and has over
                860 000 reviews on Steam. TF2 also boasts a map editor where players can create their own maps for other players to play on, allowing for much creativity.
                </p>

                <!-- Gallery -->
                <div id="gtav-gallery" class="gallery tf2-gallery">
                    
                    <div class="prev-container">
                        <a href="#" class="previous round">&#8249;</a>   
                    </div>

                    <img class="img-caption" src="images/tf2/tf2-caption.jpeg" alt="tf2-caption-image">

                    <div class="next-container">
                        <a href="#" class="next round">&#8250;</a>
                    </div>

                    <div class="img-list"> 
                        <img src="images/tf2/tf0.jpg" alt="tf2-image">
                        <img src="images/tf2/tf1.jpg" alt="tf2-image">
                        <img src="images/tf2/tf2.jpg" alt="tf2-image">
                        <img src="images/tf2/tf3.jpg" alt="tf2-image">
                        <img src="images/tf2/tf4.jpg" alt="tf2-image">

                    </div>
                </div>

            </section>

            <section class="ratings tf2-ratings" >
                <table class="ratings-table">
                    <caption class="table-title">Game Ratings</caption>
                    <tr class="header-list">
                        <th class="header-item">Stars</th>
                        <th class="header-item">Comment</th>
                        <th class="header-item">Reviews</th>
                    </tr>

                    <tr class="rating">
                        <td class="star-list">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </td>

                        <td class="comment">
                            <p>Legendary</p>
                        </td>

                        <td class="reviews">
                            <a href="#">Read Reviews</a>
                        </td>
                    </tr>

                </table>
            </section>
        </section>

    </main>

    <?php require("components/footer.inc.php"); ?>

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