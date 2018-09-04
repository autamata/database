<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http:www.w3.org/1999/xhmtl" xml:lang="en" lang="en">
<head>
	<title>Search page</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="pages.css"> 	 
</head>
<body class="body">

<div id="report_page">

<?php
 
//include_once('header.php');
require_once '../config.php';
	
$db_server = mysqli_connect($db_host, $db_user, $db_password);

if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error($db_server));

mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error($db_server));


if (isset($_POST['delete']) && isset($_POST['id']))
	{
		$student_id = $_POST['id'];
		
		$query = "DELETE FROM students WHERE id='$student_id'";
		
		if (!mysqli_query($db_server, $query))
		{
			echo "DELETE failed: $query<br />" . mysqli_error($db_server) . "<br /><br />";

		} else{

			echo "<p id=''>You have deleted Student ID: <strong>" .$_POST['id']. "</strong></p>";
		}
	}

?>

<div id="">

<?php 
	$query = "SELECT * FROM students";
	
	$result = mysqli_query($db_server, $query);
	
	if (!$result) die ("Database access failed: " . mysqli_error($db_server));
	
	$rows = mysqli_num_rows($result);
	
	
?>

<table id="main_report" border="1" cellspacing = "1" cellpadding="0">
	<caption><b><h2>MAIN INPUT REPORTING</h2></b></caption><br><br>
	
	<tr id="">
		<th id="mreport">Student ID
		<th id="mreport">First Name
		<th id="mreport">Last Name
		<th id="mreport">Phone
		<th id="mreport">Degree
		<th id="mreport">Funding
		<th id="mreport">Matricualtion Semester
		<th id="mreport">Matriculation Year
		<th id="mreport">Graduation Semester
		<th id="mreport">Graduation Year
		<th id="mreport">Removed from Program: semester
		<th id="mreport">Removed from Program: year
		<th id="mreport">Reason
		<th id="mreport">Appeal
		<th id="mreport">Advisor Name
		
<!--		<th id="search_report">Student ID
		<th id="search_report">TA $
		<th id="search_report">TA Semester
		<th id="search_report">TA Year
		<th id="search_report">Classes
		<th id="search_report">Stipend
		<th id="search_report">Tuition Amount
		<th id="search_report">Tuition Semester
		<th id="search_report">Tuition Year
		<th id="search_report">Research Amount
		<th id="search_report">Research Semester
		<th id="search_report">Research Year
		<th id="search_report">Preliminary Exams: 1st Attempt: Month
		<th id="search_report">Year
		<th id="search_report">Status
		<th id="search_report">2nd attempt: Month
		<th id="search_report">Year
		<th id="search_report">Status
		<th id="search_report">Applied Analysis: 1st Attempt Month
		<th id="search_report">Year
		<th id="search_report">Status
		<th id="search_report">2nd Attempt Month
		<th id="search_report">Year
		<th id="search_report">Status
		<th id="search_report">Failed Exam
		-->
		</th>
	</tr>
	
<?php
		while ($row = mysqli_fetch_array($result)) {
?>
	<tr id="search_report">
		<td id="id"><?php  echo $row["id"]; ?></td>
		<td><?php  echo $row["fname"]; ?></td>
		<td><?php echo $row["lname"]; ?>
		<td><?php echo "<b>".$row["phone"]."</b>"; ?>
		<td><?php echo "<b>".$row["degree"]."</b>"; ?>
		<td><?php echo "<b>".$row["funding"]."</b>"; ?>
		<td><?php echo "<b>".$row["matriculation_semester"]."</b>"; ?>
		<td><?php echo "<b>".$row["matriculation_year"]."</b>"; ?>
		<td><?php echo "<b>".$row["graduation_semester"]."</b>"; ?>
		<td><?php echo "<b>".$row["graduation_year"]."</b>"; ?>
		<td><?php echo "<b>".$row["removed_semester"]."</b>"; ?>
		<td><?php echo "<b>".$row["removed_year"]."</b>"; ?>
		<td><?php echo "<b>".$row["reason"]."</b>"; ?>
		<td><?php echo "<b>".$row["appeal"]."</b>"; ?>
		<td><?php echo "<b>".$row["advisor"]."</b>"; ?>
	</tr>
			
<?php

	}// endofwhile

	echo '</table>';

	mysqli_free_result($result);
?>
	</ul>
</div>
	<p><a href="admin.php">Return to Administration Page</a></p>
</div>
</div>