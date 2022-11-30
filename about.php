<?php 
    require("components/head.inc.php");
    // require('./server/app.php'); 
?>

    <title>get nerfed! | About </title>
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
                    <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
                </ul>
                
                <!-- Login Button Component -->
                <?php require("components/login.btn.inc.php"); ?>       
                
            </nav>

            <!-- Login Modal Component -->
            <?php require("components/login.modal.inc.php"); ?> 

    </header>

    <main class="about-us">
        <!-- Introduction -->
        <section class="intro">

            <img class="intro-image" src="images/mainpage.jpg" alt="introduction image">
            <h1 class="section-title section-title_intro" >
                about us
            </h1>

            <!-- Dropdown Theme Menu Component -->
            <?php require("components/theme.menu.inc.php"); ?> 

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

    <?php require("components/footer.inc.php"); ?>

    <script src="js/script.js"></script>
    
    <!-- Username and welcome Msg Component -->
    <?php require("components/welcome.msg.inc.php"); ?> 

</body>

</html>