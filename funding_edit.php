<div id="manage_page">

<div>
	<h1 id="head17">Manage Funding Page</h1>
<?php
 
include_once('header.php');
require_once '../config.php';
	
$db_server = mysqli_connect($db_host, $db_user, $db_password);

if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error($db_server));

mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error($db_server));


if (isset($_POST['delete']) && isset($_POST['id']))
	{
		$id = $_POST['id'];
		
		$query = "DELETE FROM funding WHERE id='$id'";
		
		if (!mysqli_query($db_server, $query))
		{
			echo "DELETE failed: $query<br />" . mysqli_error($db_server) . "<br /><br />";

		} else{

			echo "<p id='delete'>You have deleted Student ID: <strong>" .$_POST['student_id']. "</strong></p>";
		}
	}

?>

<div id="innertable">
<ul type="square">
<?php 
	$query = "SELECT * FROM funding";
	
	$result = mysqli_query($db_server, $query);
	
	if (!$result) die ("Database access failed: " . mysqli_error($db_server));
	
	$rows = mysqli_num_rows($result);
	
	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$row = mysqli_fetch_row($result);
?>
	<li>
		ID:    <?php  echo "<b>".$row[0]."</b>"; ?><br>
		Student ID:   <?php  echo "<b>".$row[1]."</b>"; ?><br>
		TA $:    <?php  echo "<b>".$row[2]."</b>"; ?><br>
		TA semester: <?php echo "<b>".$row[3]."</b>"; ?><br>
		TA year:     <?php echo "<b>".$row[4]."</b>"; ?><br>
		TA classes:     <?php echo "<b>".$row[5]."</b>"; ?><br>
		Stipend $:  <?php echo "<b>".$row[6]."</b>"; ?><br>
		Tuition $:  <?php echo "<b>".$row[7]."</b>"; ?><br>
		Tuition Semester: <?php echo "<b>".$row[8]."</b>"; ?><br>
		Tuition Year:     <?php echo "<b>".$row[9]."</b>"; ?><br>
		Research Funding $:  <?php echo "<b>".$row[10]."</b>"; ?><br>
		Research Funding Semester:     <?php echo "<b>".$row[11]."</b>"; ?><br>
		Research Funding Year:     <?php echo "<b>".$row[12]."</b>"; ?><br>
		<b>Preliminary Exams </b><br>
		<b>Linear Algebra:</b><br>
		1st Attempt month:     <?php echo "<b>".$row[13]."</b>"; ?><br>
		1st Attempt Year:     <?php echo "<b>".$row[14]."</b>"; ?><br>
		1st Pass/Fail:     <?php echo "<b>".$row[15]."</b>"; ?><br>
		2nd Attempt month:     <?php echo "<b>".$row[16]."</b>"; ?><br>
		2nd Attempt year: <?php echo "<b>".$row[17]."</b>"; ?><br>
		2nd Pass/Fail:     <?php echo "<b>".$row[18]."</b>"; ?><br>
		Applied Analysis:<br>
		1st Attempt month:     <?php echo "<b>".$row[19]."</b>"; ?><br>
		1st Attempt Year:     <?php echo "<b>".$row[20]."</b>"; ?><br>
		1st Pass/Fail:     <?php echo "<b>".$row[21]."</b>"; ?><br>
		2nd Attempt month:     <?php echo "<b>".$row[22]."</b>"; ?><br>
		2nd Attempt year: <?php echo "<b>".$row[23]."</b>"; ?><br>
		2nd Pass/Fail:     <?php echo "<b>".$row[24]."</b>"; ?><br>
		Failed Exam:   <?php echo "<b>".$row[25]."</b>"; ?><br>
		
	</li>				
	<form action="funding_edit.php" method="post">
		<input type="hidden" name="student_id" value="<?php echo $row[1]; ?>">
		<input type="hidden" name="delete" value="yes" />
		<input type="hidden" name="id" value="<?php echo $row[0]; ?>" />
		<input type="submit" value="Delete" /><br>
	</form>
	<hr id="line">
<?php 
	}  //endforeach; 
	mysqli_free_result($result);
?>
	</ul>
</div>
	<p><a href="admin.php">Return to Administration Page</a></p>
</div>