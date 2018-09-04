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
	$query = "SELECT * FROM funding";
	
	$result = mysqli_query($db_server, $query);
	
	if (!$result) die ("Database access failed: " . mysqli_error($db_server));
	
	$rows = mysqli_num_rows($result);
	
	
?>

<table id="main_report" border="1" cellspacing = "1" cellpadding="0">
	<caption><b><h2>FUNDING REPORTING</h2></b></caption><br><br>
	
	<tr id="">
		<th id="mreport">ID
		<th id="mreport">Student ID
		<th id="mreport">TA $
		<th id="mreport">TA Semester
		<th id="mreport">TA Year
		<th id="mreport">Classes
		<th id="mreport">Stipend
		<th id="mreport">Tuition Amount
		<th id="mreport">Tuition Semester
		<th id="mreport">Tuition Year
		<th id="mreport">Research Amount
		<th id="mreport">Research Semester
		<th id="mreport">Research Year
		<th id="mreport">Preliminary Exams: 1st Attempt: Month
		<th id="mreport">Year
		<th id="mreport">Status
		<th id="mreport">2nd attempt: Month
		<th id="mreport">Year
		<th id="mreport">Status
		<th id="mreport">Applied Analysis: 1st Attempt Month
		<th id="mreport">Year
		<th id="mreport">Status
		<th id="mreport">2nd Attempt Month
		<th id="mreport">Year
		<th id="mreport">Status
		<th id="mreport">Failed Exam
		</th>
	</tr>
	
<?php
		while ($row = mysqli_fetch_array($result)) {
?>
	<tr id="search_report">
		<td><?php echo "<b>".$row["id"]."</b>"; ?>
		<td><?php echo "<b>".$row["student_id"]."</b>"; ?>
		<td><?php echo "<b>".$row["ta_amount"]."</b>"; ?>
		<td><?php echo "<b>".$row["ta_semester"]."</b>"; ?>
		<td><?php echo "<b>".$row["ta_year"]."</b>"; ?>
		<td><?php echo "<b>".$row["classes"]."</b>"; ?>
		<td><?php echo "<b>".$row["stipend"]."</b>"; ?>
		<td><?php echo "<b>".$row["tuition_amount"]."</b>"; ?>
		<td><?php echo "<b>".$row["tuition_semester"]."</b>"; ?>
		<td><?php echo "<b>".$row["tuition_year"]."</b>"; ?>
		<td><?php echo "<b>".$row["research_amount"]."</b>"; ?>
		<td><?php echo "<b>".$row["research_semester"]."</b>"; ?>
		<td><?php echo "<b>".$row["research_year"]."</b>"; ?>
		<td><?php echo "<b>".$row["preli_fmonth"]."</b>"; ?>
		<td><?php echo "<b>".$row["preli_fyear"]."</b>"; ?>
		<td><?php echo "<b>".$row["preli_fstatus"]."</b>"; ?>
		<td><?php echo "<b>".$row["preli_smonth"]."</b>"; ?>
		<td><?php echo "<b>".$row["preli_syear"]."</b>"; ?>
		<td><?php echo "<b>".$row["preli_sstatus"]."</b>"; ?>
		<td><?php echo "<b>".$row["applied_fmonth"]."</b>"; ?>
		<td><?php echo "<b>".$row["applied_fyear"]."</b>"; ?>
		<td><?php echo "<b>".$row["applied_fstatus"]."</b>"; ?>
		<td><?php echo "<b>".$row["applied_smonth"]."</b>"; ?>
		<td><?php echo "<b>".$row["applied_syear"]."</b>"; ?>
		<td><?php echo "<b>".$row["applied_sstatus"]."</b>"; ?>
		<td><?php echo "<b>".$row["failed_exam"]."</b>"; ?>
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