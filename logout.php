	<link rel="stylesheet" type="text/css" href="pages.css"> 

<?php
	
	require_once ('config.php');

//this page is show that logout is successful.
/*
if (!isset($_SESSION['admin'])) {
//	$url = BASE_URL. 'index.php';

	ob_end_clean();

	header("Location: index.php");

	exit();

}else{ //logout the user

	$_SESSION = array(); //destroy the variables
	session_destroy(); //destroy the session itself

	setcookie(session_name(), '', time()-30); //destroy the cookies
	header("Location: index.php");
}
*/
echo '<h3 id="logout"> You are now logged out.</h3>';


?>