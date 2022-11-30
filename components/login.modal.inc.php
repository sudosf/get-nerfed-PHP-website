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