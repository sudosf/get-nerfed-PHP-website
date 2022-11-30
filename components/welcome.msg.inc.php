<script>
    // get database connection status
    // $db->status declared in php file
    var connStatus = <?= json_encode($db->status) ?>;

    if (connStatus != null) {
        // display status
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
    }
</script>