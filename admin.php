<?php
	//this code to set up a session and log in page for administrator
	session_start();
	$_SESSION['admin'] = 'login';

	include_once('admin_fns.php');

	if (($_SERVER['PHP_AUTH_USER'] != 'admin') || ($_SERVER['PHP_AUTH_PW'] != 'admin')) {
		header('WWW-Authenticate: Basic Realm="Secret Stash"');
		header('HTTP/1.1 401 Unauthorized');
		echo 'You must provide the proper credentials!';

		echo "<br>Close this page and reopen it.";
		exit();
	}
?>
<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN" 
 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 	<title>Administration Page</title>
 	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 	<link rel="stylesheet" type="text/css" href="pages.css">

</head>
<body class="body">

 	<img src="mathSciences.png" alt="company logo" style="width:300px;height:50px;" align="left"><br/><br/><br>
 
 	<h2 id="head">Math Department Database Management System</h2>
 	
 	<div id="menu1">
 		<ul type=square>
	 		<li><a href="main_input_page.php" style="text-decoration:none;">Main New Input Page</a></li>
 			<li><a href="funding.php" style="text-decoration:none;">Funding New Input Page</a></li> 			
 			<li><a href="header.php" style="text-decoration:none;">Testing Page for Developer</a></li>
 			<li><a href="search.php" style="text-decoration:none;">Search Page</a></li>
 			<li><a href="main_input_reporting.php" style="text-decoration:none;">Main Input Report</a></li>
 			<li><a href="funding_report.php" style="text-decoration:none;">Funding Report</a></li>
 			<li><a href="logout.php" style="text-decoration:none;">Log Out </a></li>
 				<li><a href="view.php" style="text-decoration:none;">Main Edit Page </a></li>
 				<li><a href="view1.php" style="text-decoration:none;">Funding Edit Page</a></li>
 		</ul>
 	</div>
 	<br/>
 	<hr id="end">
 	<?php footer();?> 

</body>
</hmtl> 