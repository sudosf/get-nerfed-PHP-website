<?php require('./server/database.php');


$db = new Database();
$db->createAllTables();

/*------------- Form Validation ---------------- */

// Error strings, input strings.
$fname = $surname = $email = $subject = $message = ""; // contact form
$fnameErr = $surnameErr = $emailErr = $messageErr = $contactFormErr = ""; // contact form
$contactFormSuccess = $prizeFormSuccess = "";
$pfname = $psurname = $pphone = ""; // prize form
$pfnameErr = $psurnameErr = $pphoneErr = $prizeFormErr = ""; // prize form

$loginComplete = $loginFormErr = ""; // log in form
$displayForm = false;
$isValidUser = false; // used for updating username in dom

$username = $usernameErr = $registerFormErr = ""; // register form
$password = $passwordRepeat =""; // register form

$contactComplete = $prizeComplete = $registerComplete = false; // for checking if form is complete

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if ( isset($_POST['submitContact']) ) {
    /************* Contact form validation ***********************/

		// hide log in form pop up
		$displayForm = false;

		// first name validation
		$contactComplete = true;
		if ( empty($_POST["fname"]) ) {
			$fnameErr = "First name is required";
			$contactComplete = false;
		}
		else {
			$fname = strip($_POST["fname"]);
			$fname = $db->conn->real_escape_string($_POST["fname"]);
		  	// ensure name contains letters and whitespaces only
		  	if ( !preg_match("/^[a-zA-Z-' ]*$/", $fname) ) {
				$fnameErr = "Only letters and white space allowed";
				$contactComplete = false;
			}
		}

		// surname validation
		if ( empty($_POST["surname"]) ) {
			$surnameErr = "Surname is required";
			$contactComplete = false;
		}
		else {
			$surname = strip( $_POST["surname"] );
			$surname = $db->conn->real_escape_string($_POST["surname"]);
		  	// ensure surname contains letters and whitespaces only
		  	if ( !preg_match("/^[a-zA-Z-' ]*$/",$surname) ) {
				$surnameErr = "Only letters and white space allowed";
				$contactComplete = false;
			}
		}

  		// email validation
		if ( empty($_POST["email"]) ) { 
			$emailErr = "Email is required";
			$contactComplete = false;
		}
		else {
			$email = strip($_POST["email"]);
			$email = $db->conn->real_escape_string($_POST["email"]);
			// ensure email address is in correct format
			if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
				$emailErr = "Invalid email format";
				$contactComplete = false;
			}
		}

		// get subject (support type)
		$subject = $_POST['subject'];

		// message validation
		if ( empty($_POST["message"]) ) {
			$messageErr = "Message is required";
			$contactComplete = false;
		}
		else{
			$message = $_POST['message'];
			$message = $db->conn->real_escape_string($_POST["message"]);
		}

		// check that all required inputs are filled in
		if ($contactComplete) {
			$contactFormSuccess = "Contact Form Complete!";

			$table = "Contact";
			$sql = "INSERT INTO {$table} (firstname, lastname, email, subject, message)
					VALUES ('{$fname}', '{$surname}', '{$email}', '{$subject}', '{$message}');";

			$db->insertRecord($sql);
			$contactFormSuccess .= "<br><br> Support request has been logged!";

		} else $contactFormErr = " Failed to send message, please enter all input fields!";
  
	}
	else if ( isset($_POST['submitPrize']) ) {
		/**************** Prize form validation ******************/

		// hide log in form pop up
		$displayForm = false;

		// prize first name validation
		$prizeComplete = true;	
		if ( empty($_POST["pfname"]) ) {
			$pfnameErr = "First name is required";
			$prizeComplete = false;
		}
		else {
			$pfname = strip( $_POST["pfname"] );
			$pfname = $db->conn->real_escape_string($_POST["pfname"]);
			// ensure name contains letters and whitespaces only
			if ( !preg_match("/^[a-zA-Z-' ]*$/", $pfname) ) {
				$pfnameErr = "Only letters and white space allowed";
				$prizeComplete = false;
			}
		}

		// prize surname validation
		if ( empty($_POST["psurname"]) ) {
			$psurnameErr = "Surname is required";
			$prizeComplete = false;
		}
		else {
			$psurname = strip( $_POST["psurname"] );
			$psurname = $db->conn->real_escape_string($_POST["psurname"]);
			// ensure surname contains letters and whitespaces only
			if ( !preg_match("/^[a-zA-Z-' ]*$/", $psurname) ) {
				$psurnameErr = "Only letters and white space allowed";
				$prizeComplete = false;
			}
		}
		
		// prize phone validation
		if ( empty($_POST["pphone"]) ) {
			$pphoneErr = "Phone number is required";
			$prizeComplete = false;
		}
		else {
			$pphone = strip( $_POST["pphone"] );
			$pphone = $db->conn->real_escape_string($_POST["pphone"]);
			// ensure phone number contains numbers only
			if ( !preg_match('/^[0-9]{10}+$/', $pphone )) {
				$pphoneErr = "Phone number invalid";
				$prizeComplete = false;
			}
		}

		// check that all required inputs are filled in
		if ($prizeComplete) {
			$prizeFormSuccess = "Prize Form Complete!";

			$table = "Prize";
			$sql = "INSERT INTO {$table} (firstname, lastname, phone)
					VALUES ('{$pfname}', '{$psurname}', '{$pphone}');";

			$db->insertRecord($sql);
			$prizeFormSuccess .= "<br><br> You've been entered into the draw!";
			
		} else $prizeFormErr = " Failed to enter draw, please enter all input fields!";

	} else if ( isset($_POST['submitRegister']) ) {

		/**************** register form validation ******************/
		// hide log in form pop up
		$displayForm = false;

		// first name validation
		$registerComplete = true;
		if ( empty($_POST["fname"]) ) {
			$registerFormErr .= "First name is required<br>";
			$registerComplete = false;
		}
		else {
			$fname = strip($_POST["fname"]);
				// ensure name contains letters and whitespaces only
				if ( !preg_match("/^[a-zA-Z-' ]*$/", $fname) ) {
					$registerFormErr .= "Only letters and white space allowed<br>";
				$registerComplete = false;
			}
		}

		// surname validation
		if ( empty($_POST["surname"]) ) {
			$registerFormErr .= "Surname is required<br>";
			$registerComplete = false;
		}
		else {
			$surname = strip( $_POST["surname"] );
				// ensure surname contains letters and whitespaces only
				if ( !preg_match("/^[a-zA-Z-' ]*$/",$surname) ) {
				$registerFormErr .= "Only letters and white space allowed<br>";
				$registerComplete = false;
			}
		}

		// email validation
		if ( empty($_POST["email"]) ) { 
			$registerFormErr .= "Email is required<br>";
			$registerComplete = false;
		}
		else {
			$email = strip($_POST["email"]);
			// ensure email address is in correct format
			if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
				$registerFormErr = "Invalid email format<br>";
				$registerComplete = false;
			}
		}

		// username validation
		if ( empty($_POST["username"]) ) {
			$registerFormErr .= "username is required<br>";
			$registerComplete = false;
		}
		else $username = $_POST['username'];

		// get gender 
		$genderType = $_POST["gender"];
		$gender;

		switch($genderType){
			case "male": $gender = 'M'; break;
			case "female": $gender = 'F'; break;
			case "other": $gender = "Other"; break;
			default: break;
		}

		// password validation
		if( empty($_POST["psw"])) {
			$registerFormErr .= "password is required<br>";
			$registerComplete = false;
		} else {
			$password = $_POST["psw"];
			$passwordRepeat = $_POST["psw-repeat"];

			if ($password !== $passwordRepeat) {
				$registerFormErr .= "Passwords do not match, please try again <br>";
				$registerComplete = false;
			} else {
				// hash the password to store
				$password = password_hash($password, PASSWORD_DEFAULT);
			}
		}

		// check that all required inputs are filled in
		if ($registerComplete) {
			$registerFormErr = "Register Form Complete!";

			$table = "Users";
			$sql = "INSERT INTO {$table} (firstname, lastname, username, password, email, gender)
					VALUES ('{$fname}', '{$surname}', '{$username}', '{$password}',
					'{$email}', '{$gender}');";

			$db->insertRecord($sql);
			$registerFormErr .= "<br><br> Registered successfully, you can now log in!";

		} else $registerFormErr .= " Failed to register, please enter all input fields!";
	}
	else if ( isset($_POST['submitLogin'] ) ) {

		/**************** log in form validation ******************/

		// hide log in form pop up
		$displayForm = false;

		$loginComplete = true;
		// username validation
		if ( empty($_POST["username"]) ) {
			$loginFormErr .= "username is required<br>";
			$loginComplete = false;
			$displayForm = true;
		} else {
			$username = $_POST["username"];
		}

		// password validation
		if( empty($_POST["psw"])) {
			$loginFormErr .= "password is required<br>";
			$loginComplete = false;
			$displayForm  = true;
		} else {
			$password = $_POST["psw"];
		}

		if ($loginComplete) {
			// check if user details are valid
			$isValidUser = $db->userValid($username, $password);
			
			if ($isValidUser) {
				$loginFormErr = "Succefully logged in";
				redirect("index.php");

				session_start();

				// check for matching ip address
				if ($_SERVER['REMOTE_ADDR'] != $_SESSION['ipaddress']) {
					session_unset();
					session_destroy();
				}

				// check user agent for session
				if ($_SERVER['HTTP_USER_AGENT'] != $_SESSION['useragent']) {
					session_unset();
					session_destroy();
				}

				// validate access time
				if (time() > ($_SESSION['lastaccess'] + 2600)) {
					session_unset();
					session_destroy();
				}else $_SESSION['lastaccess'] = time();
				
			} else {
				$loginFormErr = "user not found, please try again";
				$displayForm = true;
			}

		} else {
			// form incomplete
			$loginFormErr .= "Log in falied, please enter all fields<br>";
			$displayForm = true;
		}

	}
}

// get rid of spaces, new lines, unwanted characters etc.
function strip($data) {
	$data = preg_replace("@\n@", "", $data);
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	// trim(preg_replace('/\t+/', '', $data));
	return $data;
}

// redirect to other page
function redirect($url) {
    header('Location: '.$url);
    die();
}

/*------------- Form Validation -> END ---------------- */

?>

