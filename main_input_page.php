<!-- this is a main add device page-->
<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http:www.w3.org/1999/xhmtl" xml:lang="en" lang="en">
<head>
	<title>Main Input Page</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="pages.css"> 
</head>
<body class="body">
	<div id="table">	
		<h2 id="main_head">Main New Input Page</h2><br>
<?php 


	// the following is main php logic to login to database and add device to database
	require_once '../config.php';
//	require_once 'config.php';

	$db_server = mysqli_connect($db_host, $db_user, $db_password);

	if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());

	mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error());

	
	if(isset($_POST['submit'])){


		//validate student ID
		if(!empty($_POST['student_id'])) {
			$student_id = $_POST['student_id'];
		}else{
			$student_id = NULL;
			echo "<p class='error'>You forgot to enter Student ID.</p>";
		}

		//validate first name
		if(!empty($_POST['fname'])){
			$fname = $_POST['fname'];
		}else{
			$fname = NULL;
			echo "<p class='error'>You forgot to enter First Name.</p>";
		}

		//validate last name
		if(!empty($_POST['lname'])) {
			$lname = $_POST['lname'];
		}else{
			$lname = NULL;
			echo "<p class='error'>You forgot to enter Last Name.</p>";
		}

		//validate phone number
		if(!empty($_POST['phone'])){
			$phone = $_POST['phone'];
		}else{
			$phone = NULL;
			echo "<p class='error'>You forgot to enter Phone number.</p>";
		}

		//validate degree
		if(isset($_POST['degree'])) {
			$degree = $_POST['degree'];
		}else{
			$degree = NULL;
			echo "<p class='error'>You forgot to select Degree.</p>";
		}

		//validate funding
		if(isset($_POST['funding'])){
			$funding = $_POST['funding'];
		}else{
			$funding = NULL;
			echo "<p class='error'>You forgot to enter Funding.</p>";		
		}

		//validate matriculation semester
		if(!empty($_POST['matriculation_semester'])){
			$matriculation_semester = $_POST['matriculation_semester'];
				
		}else{
			$matriculation_semester = NULL;
			echo "<p class='error'>You forgot to select matriculaion semester.</p>";					
		}

		//validate matriculation year
		if(!empty($_POST['matriculation_year'])){
			$matriculation_year = $_POST['matriculation_year'];
		}else{
			$matriculation_year = NULL;
			echo "<p class='error'>You forgot to select matriculation year.</p>";
		}

		//validate graduation semester
		if(!empty($_POST['graduation_semester'])){
			$graduation_semester = $_POST['graduation_semester'];
		}else{
			$graduation_semester = NULL;
//			echo "<p class='error'>You forgot to select graduation semester.</p>";
		}
		
		//validate graduation year
		if(!empty($_POST['graduation_year'])){
			$graduation_year = $_POST['graduation_year'];
		}else{
			$graduation_year = NULL;
//			echo "<p class='error'>You forgot to select graduation year.</p>";
		}

		//validate removed semester
		if(!empty($_POST['removed_semester'])){
			$removed_semester = $_POST['removed_semester'];
		}else{
			$removed_semester = NULL;
//			echo "<p class='error'>You forgot to select removed semester.</p>";
		}

		//validate removed year
		if(!empty($_POST['removed_year'])){
			$removed_year = $_POST['removed_year'];
		}else{
			$removed_year = NULL;
//			echo "<p class='error'>You forgot to select removed year.</p>";
		}

		//validate reason
		if(!empty($_POST['reason'])){
			$reason = $_POST['reason'];
		}else{
			$reason = NULL;
//			echo "<p class='error'>You forgot to enter Reason.</p>";
		}

		//validate appeal
		if(isset($_POST['appeal'])){
			$appeal = $_POST['appeal'];
		}else{
			$appeal = NULL;
//			echo "<p class='error'>You forgot to select Appeal.</p>";
		}

		//validate advisor
		if(!empty($_POST['advisor'])){
			$advisor = $_POST['advisor'];
		}else{
			$advisor = NULL;
			echo "<p class='error'>You forgot to enter Advisor.</p>";
		}

	if(!empty($_POST['student_id']) && !empty($_POST['fname']) && !empty($_POST['lname'])
	 && !empty($_POST['phone']) && isset($_POST['degree']) && isset($_POST['funding'])
	  && !empty($_POST['matriculation_semester']) && !empty($_POST['matriculation_year']) 
	   && !empty($_POST['advisor']))
	{
	  
		$query = "INSERT INTO students VALUES" . "( '$student_id', '$fname', '$lname', '$phone', '$degree', '$funding', '$matriculation_semester', '$matriculation_year', '$graduation_semester', '$graduation_year', '$removed_semester', '$removed_year', '$reason', '$appeal', '$advisor')";
		
		//'". mysqli_insert_id($db_server)."',
		
		if (!mysqli_query($db_server, $query)){
		
			echo "INSERT failed: $query<br /><br><p id='err'>" . mysqli_error($db_server) . "<br /><br />";
		
		}else{

			header("Location: submit.php");
		}

	}

   }

?>

	<table id="main_form">
		<tr>
		<td>
		<form action="main_input_page.php" enctype="multipart/form-data" method="post">
			<table align="center">
			<tr>
			<td  class="first">
				<label for="student_id">Student ID: *</label>
			</td>
			<td class="second">
				<input type="text" name="student_id" size="30" />
			</td>
			</tr>
			<tr>
			<td class="first">
				<label for="fname">First Name: *</label>
			</td>
			<td class="second">
				<input type="text" name="fname" size="30" />
			</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="lname">Last Name: *</label>
			</td>
			<td class="second">
				<input type="text" name="lname" value="" size="30" />
			</td>
			</tr>
			<tr>
			<td class="first">
				<label for="phone">Phone: *</label>
			</td>
			<td class="second">
				<input type="text" name="phone" size="30" value="" />
			</td>
			</tr>
			<br/>
			<tr>
				<td class="first">
					<label for="degree">Degree: *</label>
				</td>
				<td class="second" >
					<label for="degree">PHD</label>
						<input type="radio" name="degree" value="PHD"  />
						 <label for="degree">MS</label>
						<input type="radio" name="degree" value="MS" />
				</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="funding">Funding: *</label>
			</td>
			<td class="second" >
					<label for="funding">Funded</label>
						<input type="radio" name="funding" value="Funded"  />
						 <label for="funding">Partially Funded</label>
						<input type="radio" name="funding" value="Partially funded" />
				</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="matriculation">Matriculation: *</label>
			</td>
			<td class="second" >
				<select name="matriculation_semester">
					<option value="">select semester</option>
					<option value="Spring">Spring</option>
					<option value="Fall">Fall</option>
				</select>									
				<select name="matriculation_year">
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
				<label for="graduation">Graduation:</label>
			</td>
			<td class="second" >
				<select name="graduation_semester">
					<option value="">select semester</option>
					<option value="Spring">Spring</option>
					<option value="Fall">Fall</option>
				</select>									
				<select name="graduation_year">
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
				<select name="removed_semester">
					<option value="">select semester</option>
					<option value="Spring">Spring</option>
					<option value="Fall">Fall</option>
				</select>					
				<select name="removed_year">
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
			</tr>
			<tr>
				<td class="first">
					<label for="appeal">Appeal: </label>
				</td>
				<td class ="second" >
					<label for="appeal">Accept</label>
						<input type="radio" name="appeal" value="Accept"  /> / 
						 <label for="degree">Reject</label>
						<input type="radio" name="appeal" value="Reject" />
				</td>
			</tr>
			<tr>
			<td class="first">
				<label for="advisor">Advisor Name: *</label>
			</td>
			<td class="second">
				<input type="text" name="advisor" size="30" />
			</td>
			</tr>
			<tr>
				<td></td><td class="second"><b><h3> * required</h3></b></td>
			</tr>
			<tr>
				<td>			
				</td>
				<td class="third">
					<input id="reset" type="reset" name="reset" value="Reset" />
					<input id="submit" type="submit" name="submit" value="Save" />
<!--					<input type="hidden" name="submitted" value="1" /><br>		-->	
				</td>
			</tr>
			</table>
		</form>
		</td>
		</tr>		
	</table>

	<div>
		<p id="main_page"><a href="admin.php"> Return to Main Page</a></p>
	</div>
</body>
</html>