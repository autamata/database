<!-- this is a main add device page-->
<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http:www.w3.org/1999/xhmtl" xml:lang="en" lang="en">
<head>
	<title>View Page</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="pages.css"> 
</head>
<body class="body">
	<div>
		<br>
		<p id="view_head">View Page</p><br>
<?php 


	// the following is main php logic to login to database and add device to database
	require_once '../config.php';

	$db_server = mysqli_connect($db_host, $db_user, $db_password);

	if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());

	mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error());

		$query = "SELECT * FROM students";  // WHERE id = '".$student_id."'";
	
		$result = mysqli_query($db_server, $query);
	
	if (!$result) die ("Database access failed: " . mysqli_error($db_server));
	
//		$row = mysqli_fetch_array($result);

//---------------------------------------

		$rows = mysqli_num_rows($result);
	
?>

<div id="view">
	<table width ="100%" border="1" cellspacing = "1" cellpadding="1">
	<caption></caption><br><br>
	<tr ><th rowspan="1">
		<th id="table_head" colspan="15">Main Input</th></tr>
	<tr id="search_report">
		<th></th>
		<th id="view_report">Student ID
		<th id="view_report">First Name
		<th id="view_report">Last Name
		<th id="view_report">Phone
		<th id="view_report">Degree
		<th id="view_report">Funding
		<th id="view_report">Matricualtion Semester
		<th id="view_report">Matriculation Year
		<th id="view_report">Graduation Semester
		<th id="view_report">Graduation Year
		<th id="view_report">Removed from Program: semester
		<th id="view_report">Removed from Program: year
		<th id="view_report">Reason
		<th id="view_report">Appeal
		<th id="view_report">Advisor Name
		</th>
	</tr>
	
<?php

		for ($j = 0; $j < $rows; ++$j)
		{
			$row = mysqli_fetch_row($result);


//		while ($row = mysqli_fetch_array($result)) {
?>
	<tr id="search_report">
		<?php 
			echo '<td><b><a href="edit_main_input_page.php?id='.$row[0].'">edit</a></b></td>';
		?>
		<td><?php echo "<b>".$row[0]."</b>"; ?></td>
		<td><?php echo "<b>".$row[1]."</b>"; ?></td>
		<td><?php echo "<b>".$row[2]."</b>"; ?></td>
		<td><?php echo "<b>".$row[3]."</b>"; ?></td>
		<td><?php echo "<b>".$row[4]."</b>"; ?></td>
		<td><?php echo "<b>".$row[5]."</b>"; ?></td>
		<td><?php echo "<b>".$row[6]."</b>"; ?></td>
		<td><?php echo "<b>".$row[7]."</b>"; ?></td>
		<td><?php echo "<b>".$row[8]."</b>"; ?></td>
		<td><?php echo "<b>".$row[9]."</b>"; ?></td>
		<td><?php echo "<b>".$row[10]."</b>"; ?></td>
		<td><?php echo "<b>".$row[11]."</b>"; ?></td>
		<td><?php echo "<b>".$row[12]."</b>"; ?></td>
		<td><?php echo "<b>".$row[13]."</b>"; ?></td>
		<td><?php echo "<b>".$row[14]."</b>"; ?></td>

	
	</tr>
			
<?php

	}// endofwhile

	echo '</table>';

	mysqli_free_result($result);	
?>
	<div id="view_return">
		<p><a href="admin.php">Return to Administration Page</a></p><br><br>
	</div
	</div>
</body>
</html>