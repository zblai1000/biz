<?php
// This page processes the login form submission.
// The script uses sessions.

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    require ('signInFunction.php'); 

		
	// Need the database connection:
	$OneVision = @mysqli_connect("localhost", "root", "", "$biz") OR die ('Could not connect to MySQL: ' . mysqli_connect_error()); 
	
	// Check the login:
	list ($check, $data) = check_login($OneVision, $_POST['username'], $_POST['pass']);
	
	if ($check) { // OK!
		
		// Set the session data:
		session_start();
		$_SESSION["loggedin"] = true;
        //$_SESSION["id"] = $id;
        $_SESSION["username"] = trim($_POST["username"]);    
		$_SESSION["link"] = trim($_POST["link"]);   
	
		
		
		// Redirect if successful login
		redirect_user('profile.php'); 
			
	} else { // Unsuccessful!

		// Assign $data to $errors for login_page.inc.php:
		$errors = $data;

	}
		
	mysqli_close($OneVision); // Close the database connection.

} // End of the main submit conditional.

// Create the page:
include ('signInPage.php');
?>