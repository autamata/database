<div id="manage_page">

<div>
	<h1 id="head17">Manage Main Page</h1>
<?php
 
include_once('header.php');
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

			echo "<p id='delete'>You have deleted Student ID: <strong>" .$_POST['id']. "</strong></p>";
		}
	}
?>

<div id="innertable">
<ul type="square">
<?php 
	$query = "SELECT * FROM students";
	
	$result = mysqli_query($db_server, $query);
	
	if (!$result) die ("Database access failed: " . mysqli_error($db_server));
	
	$rows = mysqli_num_rows($result);
	
	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$row = mysqli_fetch_row($result);
?>
	<li>
		Student ID:   <?php  echo "<b>".$row[0]."</b>"; ?><br>
		First Name:    <?php  echo "<b>".$row[1]."</b>"; ?><br>
		Last Name: <?php echo "<b>".$row[2]."</b>"; ?><br>
		Phone:     <?php echo "<b>".$row[3]."</b>"; ?><br>
		Degree:     <?php echo "<b>".$row[4]."</b>"; ?><br>
		Funding:  <?php echo "<b>".$row[5]."</b>"; ?><br>
		Matriculation Semester: <?php echo "<b>".$row[6]."</b>"; ?><br>
		Matriculation Year:     <?php echo "<b>".$row[7]."</b>"; ?><br>
		Graduation Semester:     <?php echo "<b>".$row[8]."</b>"; ?><br>
		Graduation Year:     <?php echo "<b>".$row[9]."</b>"; ?><br>
		Removed Semester:     <?php echo "<b>".$row[10]."</b>"; ?><br>
		Removed Year:     <?php echo "<b>".$row[11]."</b>"; ?><br>
		Reason:     <?php echo "<b>".$row[12]."</b>"; ?><br>
		Appeal:     <?php echo "<b>".$row[13]."</b>"; ?><br>
		Advisor: <?php echo "<b>".$row[14]."</b>"; ?><br>
		
	</li>				
	<form action="main_editing.php" method="post">
		<input type="hidden" name="fname" value="<?php echo $row[1]; ?>">
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