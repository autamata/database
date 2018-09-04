<!-- this is a main add device page-->
<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http:www.w3.org/1999/xhmtl" xml:lang="en" lang="en">
<head>
	<title>Appeal Page</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="pages.css"> 
	<?php // include_once("admin_fns.php"); ?>
	<?php // include_once('header.php'); ?>
	<?php // include_once('bar.php'); ?>  
</head>
<body class="body">
	<div id="appeal_table">	

	<h2 id="appeal_head">Appeal Page</h2>
<?php 

/*
	// the following is main php logic to login to database and add device to database
	require_once 'config.php';
	$db_server = mysqli_connect($db_host, $db_user, $db_password);

	if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());

	mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error());


	if(isset($_POST['devicename']) && isset($_POST['manufacturer']) && isset($_POST['seller_id']) && isset($_POST['compatibility']) && isset($_POST['price']) && isset($_POST['text']) && isset($_POST['peri_device_id']) && isset($_POST['android']) && isset($_POST['apple']) && isset($_POST['specialized']) && isset($_POST['entertainment']) && isset($_POST['communication']) && isset($_POST['everyday_tasks']) && isset($_POST['scheduling']) && isset($_POST['product_image']))
	{
		$name = $_POST['devicename'];
		$manufacturer = $_POST['manufacturer'];
		$seller_id = $_POST['seller_id'];
		$compatibility = $_POST['compatibility'];
		$price = $_POST['price'];
		$description = $_POST['text'];
		$peri_device_id = $_POST['peri_device_id'];
		$android = $_POST['android'];
		$apple = $_POST['apple'];
		$specialized = $_POST['specialized'];
		$entertainment = $_POST['entertainment'];
		$communication = $_POST['communication'];
		$everyday_tasks = $_POST['everyday_tasks'];
		$scheduling = $_POST['scheduling'];
		$product_image = $_POST['product_image'];


		//specify the directory where the file is going to be placed.
		$target_dir = "/add product_pictures or images in the correct directory of the web server/";

		//specify the path of the file to be uploaded
		$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
		$uploadOK = 1;

		//hold the file extension of the uploaded file
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

		//check the file is an image file
		if (isset($_POST['submit'])) {

			$check = getimagesize($_FILES['fileToUpload']['tmp_name']);
			if ($check !== false) {
				echo "File is an image -" . $check['mime'].".";
				$uploadOK = 1;
			}else{
				echo "File is not an image file.";
				$uploadOK = 0;
			}
		}

		//check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, the file already exists.";
			$uploadOK = 0;
		}

		//check file size
		if ($_FILES['fileToUpload']['size'] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOK = 0;
		}

		//allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
			$uploadOK = 0;
		}

		//check if $uploadOK is set to 0 by an error
		if ($uploadOK == 0) {
			echo "Sorry, your file was not uploaded.";
		}else{
			if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
				echo "The file ". basename($_FILES['fileToUpload']['name']. "has been uploaded.");
			}else{
				echo "Sorry, there was an error uploading your file.";
			}
		}


		$query = "INSERT INTO device VALUES" . "('". mysqli_insert_id($db_server)."', '$name', '$manufacturer', '$seller_id', '$compatibility', '$price', '$description', '$peri_device_id', '$android', '$apple', '$specialized', '$entertainment', '$communication', '$everyday_tasks', '$scheduling', '$product_image')";
		
		if (!mysqli_query($db_server, $query)){
		
			echo "INSERT failed: $query<br />" . mysqli_error($db_server) . "<br /><br />";
		}else{

			header("Location: submit.php");
		}

	}else{

		echo "Fill in the blank form first and then submit again.";
	}

	*/
?>

	<table id="appeal_form">
		<tr>
		<td>
		<form action="add_device.php" enctype="multipart/form-data" method="post">
			<table align="center">
<!--			<tr>
			<td  class="first">
				<label for="studentid">Student ID:</label>
			</td>
			<td class="second">
				<input type="text" name="studentid" size="27" />
			</td>
			</tr>
			<tr>
			<td class="first">
				<label for="ftname">First Name:</label>
			</td>
			<td class="second">
				<input type="text" name="ftname" size="27" />
			</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="lsname">Last Name:</label>
			</td>
			<td class="second">
				<input type="text" name="ltname" value="" size="27" />
			</td>
			</tr>
			<tr>
			<td class="first">
				<label for="phone">Phone Number:</label>
			</td>
			<td class="second">
				<input type="text" name="phone" size="27" value="" />
			</td>
			</tr>             -->
			<br/>
			<tr>
				<td id="appeal_first">
					<label for="appeal">Appeal: </label>
				</td>
				<td id="appeal_second" >
					<label for="appeal">Accept</label>
						<input type="radio" name="appeal" value="1"  /> / 
						 <label for="degree">Reject</label>
						<input type="radio" name="appeal" value="0" />
				</td>
			</tr>
<!--			<tr>
			<td  class="first">
				<label for="funding">Funding:</label>
			</td>
			<td class="second" >
					<label for="funding">Funded</label>
						<input type="radio" name="funding" value="1"  />
						 <label for="funding">Partial Funded</label>
						<input type="radio" name="funding" value="0" />
				</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="matriculation">Matriculation:</label>
			</td>
			<td class="second" >
				<select name="semester">
					<option value=" ">select semester</option>
					<option value="spring">Spring</option>
					<option value="fall">Fall</option>
				</select>									
					<select>
						<option value="">select year</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2015">2017</option>
						<option value="2016">2018</option>
						<option value="2015">2019</option>
						<option value="2016">2020</option>
						<option value="2015">2021</option>
						<option value="2016">2022</option>
						<option value="2015">2023</option>
						<option value="2016">2024</option>
						<option value="2015">2025</option>
						<option value="2016">2026</option>
						<option value="2015">2027</option>
						<option value="2016">2028</option>
						<option value="2015">2029</option>
						<option value="2016">2030</option>
					</select> 
				</td>	
			</tr>
			<tr>
			<td  class="first">
				<label for="graduation">Graduation Semester:</label>
			</td>
			<td class="second" >
				<select name="semester">
					<option value=" ">select semester</option>
					<option value="spring">Spring</option>
					<option value="fall">Fall</option>
				</select>					
				
					<select>
						<option value="">select year</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2015">2017</option>
						<option value="2016">2018</option>
						<option value="2015">2019</option>
						<option value="2016">2020</option>
						<option value="2015">2021</option>
						<option value="2016">2022</option>
						<option value="2015">2023</option>
						<option value="2016">2024</option>
						<option value="2015">2025</option>
						<option value="2016">2026</option>
						<option value="2015">2027</option>
						<option value="2016">2028</option>
						<option value="2015">2029</option>
						<option value="2016">2030</option>
					</select> 
				</td>	
			</tr>



			<tr>
			<td  class="first">
				<label for="removed">Removed From Program:</label>
			</td>
			<td class="second" >
				<select name="semester">
					<option value=" ">select semester</option>
					<option value="spring">Spring</option>
					<option value="fall">Fall</option>
				</select>					
				
					<select>
						<option value="">select year</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2015">2017</option>
						<option value="2016">2018</option>
						<option value="2015">2019</option>
						<option value="2016">2020</option>
						<option value="2015">2021</option>
						<option value="2016">2022</option>
						<option value="2015">2023</option>
						<option value="2016">2024</option>
						<option value="2015">2025</option>
						<option value="2016">2026</option>
						<option value="2015">2027</option>
						<option value="2016">2028</option>
						<option value="2015">2029</option>
						<option value="2016">2030</option>
					</select> 
				</td>	
			</tr>
			<tr>
				<td class="first">Reason:</td>
				<td class="second">
					<input type="text" name="reason" size="30" />
				</td>
			</tr>                        -->
			<tr>
				<td>			
				</td>
				<td class="third">
					<input type="reset" name="reset" value="Reset" />
					<input type="submit" name="submit" value="Submit" /><br><br>			
				</td>
			</tr>
			</table>
		</form>
		</td>
		</tr>
		
	</table>
	<div>
		<p id="main"><a href="admin.php"> Return to Main Page</a></p>
	</div>
	</div>
</body>
</html>