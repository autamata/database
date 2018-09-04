<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http:www.w3.org/1999/xhmtl" xml:lang="en" lang="en">
<head>
	<title>Search page</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="pages.css"> 	 
</head>
<body class="body">
	
<?php
	require_once '../config.php';

	//otherwise it connects to database.
	$db_server = mysqli_connect($db_host, $db_user, $db_password) or die(" Unable to connect to MySQL: ".mysqli_error($db_server));
	mysqli_select_db($db_server, $db_database) or die("Unable to select MySQL database: ".mysqli_error($db_server));

	//display the results if the form has been submitted.
	if (isset($_POST['searching'])){

		//if no search term has been entered, an error was issued to the user.
			if(!empty(($_POST['find']))){

				$find = $_POST['find']; 

			}else{
				$find = NULL;
				echo "<br><br><br><br><p><h2>You need to enter a Student ID to search!</h2></p>";			
?>			
				<p><a href="search.php">Return to Search Page</a></p>
<?php

				exit(1);
			}

	//run searching code in the field that the user specified.
	$query = "SELECT s.id, s.fname, s.lname, s.phone, s.degree, s.funding, s.matriculation_semester, s.matriculation_year, s.graduation_semester, s.graduation_year, s.removed_semester, s.removed_year, s.reason, s.appeal, s.advisor, f.student_id, f.ta_amount, f.ta_semester, f.ta_year, f.classes, f.stipend, f.tuition_amount, f.tuition_semester, f.tuition_year, f.research_amount, f.research_semester, f.research_year, f.preli_fmonth, f.preli_fyear, f.preli_fstatus, f.preli_smonth, f.preli_syear, f.preli_sstatus, f.applied_fmonth, f.applied_fyear, f.applied_fstatus, f.applied_smonth, f.applied_syear, f.applied_sstatus, f.failed_exam FROM students as s LEFT JOIN funding as f ON f.student_id = s.id WHERE s.id = '".$find."'"; 
	
	$result = mysqli_query($db_server, $query);

	if (!$result) die ("Database access failed: " . mysqli_error($db_server));
	
	$rows = mysqli_num_rows($result);

	//remind the user what term was being searched for.
?>
	<div id="show">
	<p><h2><b>You are searching for Student ID: </b><?php echo $find; ?></h2></p>
	</div>
<?php
	if ($rows == 0) {//$matches == 0

?>
	<div id="show"><h2>Sorry, there is no entry found to match your search for [Student ID]: <?php echo $find; ?></h2></div>

<?php	
		}
?>
	<div>
	<table id="search_report" width ="100%" border="1" cellspacing = "1" cellpadding="1">
	<caption><b><h2>SEARCH RESULT REPORT</h2></b></caption><br><br>
	<tr ><th rowspan="1">
		<th id="table_head" colspan="15">Main Input<th rowspan="2"></th><th id="table_head" colspan ="25"> Funding</th></tr>
	<tr id="search_report">
		<th></th>
		<th id="search_report">Student ID
		<th id="search_report">First Name
		<th id="search_report">Last Name
		<th id="search_report">Phone
		<th id="search_report">Degree
		<th id="search_report">Funding
		<th id="search_report">Matricualtion Semester
		<th id="search_report">Matriculation Year
		<th id="search_report">Graduation Semester
		<th id="search_report">Graduation Year
		<th id="search_report">Removed from Program: semester
		<th id="search_report">Removed from Program: year
		<th id="search_report">Reason
		<th id="search_report">Appeal
		<th id="search_report">Advisor Name
		<th id="search_report">Student ID
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
		</th>
	</tr>
	
<?php
		while ($row = mysqli_fetch_array($result)) {

?>
	<tr id="search_report">
		<?php 

	echo '<td><a href="edit_main_input_page.php?id='.$row["id"].'">edit</a></td>';
		?>
		<td ><?php  echo $row["id"]; ?></td>
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
			<td><?php // echo "<b>".$row["id"]."</b>"; ?>
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
	<div id="search_return">
		<p><a href="admin.php">Return to Administration Page</a></p><br><br>
	</div>
	</div>
<?php
	exit(1);
} //endforif

?>
	<div id="search_page">
		<h2 id="searching">Search Page</h2><br>

<div id="searchid" >Please enter student ID for search:</div><br/><br/>
<div id="enter">
<form name="search" method="post" action="search.php">
<h6>Student ID: <input type="text" name="find" size="15" maxlength="30" />

<input type="hidden" name="searching" value="yes" />
<input id="sub" type="submit" name="search" value="Search" /></h6> 
</form>
</div>

<div id="search_return1">
	<p><a href="admin.php">Return to Administration Page</a></p>
</div>
</div>
</body>
</html>