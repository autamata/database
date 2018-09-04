<!-- this is a main add device page-->
<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http:www.w3.org/1999/xhmtl" xml:lang="en" lang="en">
<head>
	<title>funding page</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="pages.css"> 
	<?php // include_once("admin_fns.php"); ?>
	<?php // include_once('header.php'); ?>
	<?php // include_once('bar.php'); ?>  
</head>
<body class="body">	
		<h2 id="funding_head">Funding Amounts</h2>
	<div id="funding_table">		
	<!--	<h3 id="funding_head2">Linear Algebra</h3>      -->
<?php 


	// the following is main php logic to login to database and add device to database
	require_once 'config.php';
	$db_server = mysqli_connect($db_host, $db_user, $db_password);

	if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());

	mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error());


if(isset($_POST['submit'])){
	
		//validate student ID
		if(!empty($_POST['student_id'])) {
			$student_id = $_POST['student_id'];
		}else{
			$student_id = NULL;
			echo "<p id='error'>You forgot to enter Student ID.</p>";
		}

		//validate TA amount
		if(!empty($_POST['ta_amount'])){
			$ta_amount = $_POST['ta_amount'];
		}else{
			$ta_amount = NULL;
			echo "<p id='error'>You forgot to enter TA amount.</p>";
		}

		//validate TA semester
		if(!empty($_POST['ta_semester'])){
			$ta_semester = $_POST['ta_semester'];
		}else{
			$ta_semester = NULL;
			echo "<p id='error'>You forgot to select TA semester.</p>";
		}

		//validate TA year
		if(!empty($_POST['ta_year'])) {
			$ta_year = $_POST['ta_year'];
		}else{
			$ta_year = NULL;
			echo "<p id='error'>You forgot to select TA year.</p>";
		}

		//validate TA classes
		if(!empty($_POST['ta_classes'])){
			$ta_classes = $_POST['ta_classes'];
		}else{
			$ta_classes = NULL;
			echo "<p id='error'>You forgot to enter TA classes.</p>";		
		}

		//validate stipend amount
		if(!empty($_POST['stipend'])){
			$stipend = $_POST['stipend'];
				
		}else{
			$stipend = NULL;
//			echo "<p id='error'>You forgot to enter Stipend amount.</p>";					
		}

		//validate tuition amount
		if(!empty($_POST['tuition_amount'])){
			$tuition_amount = $_POST['tuition_amount'];
		}else{
			$tuition_amount = NULL;
//			echo "<p id='error'>You forgot to enter Tuition amount.</p>";
		}

		//validate tuition semester
		if(!empty($_POST['tuition_semester'])){
			$tuition_semester = $_POST['tuition_semester'];
		}else{
			$tuition_semester = NULL;
//			echo "<p id='error'>You forgot to select tuition semester.</p>";
		}
		
		//validate tuition year
		if(!empty($_POST['tuition_year'])){
			$tuition_year = $_POST['tuition_year'];
		}else{
			$tuition_year = NULL;
//			echo "<p id='error'>You forgot to select tuition year.</p>";
		}


		//validate research funding amount
		if(!empty($_POST['research_amount'])){
			$research_amount = $_POST['research_amount'];
		}else{
			$research_amount = NULL;
//			echo "<p id='error'>You forgot to enter Research Funding amount.</p>";
		}

		//validate research funding semester
		if(!empty($_POST['research_semester'])){
			$research_semester = $_POST['research_semester'];
		}else{
			$research_semester = NULL;
//			echo "<p id='error'>You forgot to select Research funding semester.</p>";
		}

		//validate research funding year
		if(!empty($_POST['research_year'])){
			$research_year = $_POST['research_year'];
		}else{
			$research_year = NULL;
//			echo "<p id='error'>You forgot to select Research funding year.</p>";
		}

		//validate preliminary exams 1st attempt month
		if(!empty($_POST['prel_fmonth'])){
			$prel_fmonth = $_POST['prel_fmonth'];
		}else{
			$prel_fmonth = NULL;
			echo "<p id='error'>You forgot to select Preliminary exams 1st attempt month.</p>";
		}

		//validate preliminary exams 1st attempt year
		if(!empty($_POST['prel_fyear'])){
			$prel_fyear = $_POST['prel_fyear'];
		}else{
			$prel_fyear = NULL;
			echo "<p id='error'>You forgot to select Preliminary exams 1st attempt year.</p>";
		}

		//validate preliminary exams 1st attempt pass/fail
		if(!empty($_POST['prel_fstatus'])){
			$prel_fstatus = $_POST['prel_fstatus'];
		}else{
			$prel_fstatus = NULL;
			echo "<p id='error'>You forgot to select Preliminary exams 1st attempt Pass/Fail.</p>";
		}


		//validate preliminary exams 2dn attempt month
		if(isset($_POST['prel_smonth'])){
			$prel_smonth = $_POST['prel_smonth'];
		}else{
			$prel_smonth = NULL;
//			echo "<p id='error'>You forgot to select Preliminary exams 2nd attempt month.</p>";
		}

		//validate preliminary exams 2nd attempt year
		if(!empty($_POST['prel_syear'])){
			$prel_syear = $_POST['prel_syear'];
		}else{
			$prel_syear = NULL;
//			echo "<p id='error'>You forgot to select Preliminary exams 2nd attempt year.</p>";
		}

		//validate preliminary exams 2nd attempt pass/fail
		if(!empty($_POST['prel_sstatus'])){
			$prel_sstatus = $_POST['prel_sstatus'];
		}else{
			$prel_sstatus = NULL;
//			echo "<p id='error'>You forgot to select Preliminary exams 2nd attempt Pass/Fail.</p>";
		}


		//validate applied analysis 1st attempt month
		if(!empty($_POST['applied_fmonth'])){
			$applied_fmonth = $_POST['applied_fmonth'];
		}else{
			$applied_fmonth = NULL;
			echo "<p id='error'>You forgot to select Applied Analysis 1st attempt month.</p>";
		}

		//validate applied analysis 1st attempt year
		if(!empty($_POST['applied_fyear'])){
			$applied_fyear = $_POST['applied_fyear'];
		}else{
			$applied_fyear = NULL;
			echo "<p id='error'>You forgot to select Applied Analysis 1st attempt year.</p>";
		}

		//validate applied analysis 1st attempt pass/fail
		if(!empty($_POST['applied_fstatus'])){
			$applied_fstatus = $_POST['applied_fstatus'];
		}else{
			$applied_fstatus = NULL;
			echo "<p id='error'>You forgot to select Applied Analysis 1st attempt Pass/Fail.</p>";
		}


		//validate applied analysis 2nd attempt month
		if(isset($_POST['applied_smonth'])){
			$applied_smonth = $_POST['applied_smonth'];
		}else{
			$applied_smonth = NULL;
//			echo "<p id='error'>You forgot to select Applied Analysis 2nd attempt month.</p>";
		}

		//validate applied analysis 2nd attempt year
		if(!empty($_POST['applied_syear'])){
			$applied_syear = $_POST['applied_syear'];
		}else{
			$applied_syear = NULL;
//			echo "<p id='error'>You forgot to select Applied Analysis 2nd attempt year.</p>";
		}

		//validate applied analysis 2nd attempt pass/fail
		if(!empty($_POST['applied_sstatus'])){
			$applied_sstatus = $_POST['applied_sstatus'];
		}else{
			$applied_sstatus = NULL;
//			echo "<p id='error'>You forgot to select Applied Analysis 2nd attempt Pass/Fail.</p>";
		}

		//validate failed exam
		if(!empty($_POST['exam_pass'])){
			$exam_pass = $_POST['exam_pass'];
		}else{
			$exam_pass = NULL;
//			echo "<p id='error'>You forgot to select Failed Exam.</p>";
		}



	if(!empty($_POST['student_id']) && !empty($_POST['ta_amount']) && !empty($_POST['ta_semester'])
	 && !empty($_POST['ta_year']) && isset($_POST['ta_classes']) && isset($_POST['stipend'])
	  && isset($_POST['tuition_amount']) && isset($_POST['tuition_semester']) 
	  && isset($_POST['tuition_year']) && isset($_POST['research_amount']) 
	  && isset($_POST['research_semester']) && isset($_POST['research_year']) 
	  && !empty($_POST['prel_fmonth']) && isset($_POST['prel_fyear']) && !empty($_POST['prel_fstatus'])
	 
	  && !empty($_POST['applied_fmonth']) && isset($_POST['applied_fyear']) && !empty($_POST['applied_fstatus'])
	  )
	{
/*&& empty($_POST['prel_smonth']) && empty($_POST['prel_syear']) && empty($_POST['prel_sstatus'])
&& isset($_POST['applied_smonth']) && isset($_POST['applied_syear']) && isset($_POST['applied_sstatus'])
&& isset($_POST['exam_pass']
*/	//----------------------	

		$query = "INSERT INTO funding VALUES" . "('". mysqli_insert_id($db_server)."', '$student_id', '$ta_amount
			', '$ta_semester', '$ta_year', '$ta_classes', '$stipend', '$tuition_amount', '$tuition_semester', '$tuition_year', 
			'$research_amount', '$research_semester', '$research_year', '$prel_fmonth', '$prel_fyear', '$prel_fstatus', '$prel_smonth', 
			'$prel_syear', '$prel_sstatus', '$applied_fmonth', '$applied_fyear', '$applied_fstatus'
			, '$applied_smonth', '$applied_syear', '$applied_sstatus', '$exam_pass')";
		
		if (!mysqli_query($db_server, $query)){
		
			echo "INSERT failed: $query<br /><p id='error'>" . mysqli_error($db_server) . "<br /><br />";
		}else{

			header("Location: submit1.php");
		}

	}else{

		echo "Fill in the blank form first and then submit again.";
	}
 }

?>


	<table id="funding_form">
		<tr>
		<td>
		<form action="funding.php" enctype="multipart/form-data" method="post">
			<table align="center">
			<tr>
			<td  class="first">
				<label for="student_id">Student ID: *</label>
			</td>
			<td class="second">
				<input type="text" name="student_id" size="27" />
			</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="ta_amount">TA: $ *</label>
			</td>
			<td id="ta_second">
				<input type="text" name="ta_amount" size="10" /> 

				<select name="ta_semester">
					<option value="">select semester</option>
					<option value="Spring">Spring</option>
					<option value="Fall">Fall</option>
				</select> /					
				<select name="ta_year">
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
				/ Classes
					<input type="text" name="ta_classes" size="30">
				</td>	
			</tr>
			<tr>
			<td class="first">
				<label for="stipend">Stipend: $</label>
			</td>
			<td class="second">
				<input type="text" name="stipend" size="7" maxlength="15" />
			</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="tuition">Tuition: $</label>
			</td>
			<td class="second">
				<input type="text" name="tuition_amount" value="" size="7" maxlength="15" /> 
				<select name="tuition_semester">
					<option value="">select semester</option>
					<option value="Spring">Spring</option>
					<option value="Fall">Fall</option>
				</select> /								
				<select name="tuition_year">
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
			<td class="first">
				<label for="research">Research Funding (RA): $</label>
			</td>
			<td class="second">
				<input type="text" name="research_amount" size="7" value="" maxlength="15" /> 				<select name="research_semester">
					<option value="" >select semester</option>
					<option value="Spring">Spring</option>
					<option value="Fall">Fall</option>
				</select> /									
				<select name="research_year">
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
				<td id="padding"></td>
			</tr>
			<tr>
				<td id="first">
					<label for="preliminary">Preliminary Exams</label>
				</td>
			</tr>
			<tr>
				<td id="title_first">
					Linear Algebra
				</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="fattempt">1st Attempt: *</label>
			</td>
			<td class="second">
				<select name="prel_fmonth">
					<option value="">select month</option>
					<option value="January">January</option>
					<option value="Februray">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>					
				</select> /					
				<select name="prel_fyear">
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
					<label for="pass">, Pass</label>
						<input type="radio" name="prel_fstatus" value="Pass"  />
						 <label for="pass"> Fail</label>
						<input type="radio" name="prel_fstatus" value="Fail" />
				</td>
			</tr>
			</td>
			</tr>
		
			<tr>
			<td  class="first">
				<label for="fattempt">2nd Attempt: </label>
			</td>
			<td class="second">
				<select name="prel_smonth">
					<option value="">select month</option>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>					
				</select> /								
				<select name="prel_syear">
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
				</select> ,
					<label for="pass">Pass</label>
						<input type="radio" name="prel_sstatus" value="Pass"  />
						 <label for="pass">Fail</label>
						<input type="radio" name="prel_sstatus" value="Fail" />
				</td>
			</tr>
			</td>
			</tr>
			
			<tr>
			<td  id="title_first">
				<label for="analysis">Applied Analysis </label>
			</td>
			<td class="second">
				
			</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="fattempt">1st Attempt: *</label>
			</td>
			<td class="second">
				<select name="applied_fmonth">
					<option value="">select month</option>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>					
				</select> /					
				<select name="applied_fyear">
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
				</select> ,
					<label for="pass">Pass</label>
						<input type="radio" name="applied_fstatus" value="Pass"  />
						 <label for="pass">Fail</label>
						<input type="radio" name="applied_fstatus" value="Fail" />
				</td>
			</tr>
			</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="sattempt">2nd Attempt: </label>
			</td>
			<td class="second">
				<select name="applied_smonth">
					<option value="">select month</option>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>					
				</select> /					
				<select name="applied_syear">
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
				</select> ,
			
					<label for="pass">Pass</label>
						<input type="radio" name="applied_sstatus" value="Pass"  />
						 <label for="pass">Fail</label>
						<input type="radio" name="applied_sstatus" value="Fail" />
				</td>
			</tr>
			</td>
			</tr>
			<tr>
			<td  class="first">
				Failed Exam:
			</td>
			<td class="second" >
					<label for="exam">Graduated</label>
						<input type="radio" name="exam_pass" value="Graduated"  />
						 <label for="pass">Left</label>
						<input type="radio" name="exam_pass" value="Left" />
				</td>
			</tr>
			</td>
			</tr>
			<tr>
				<td></td><td class="second"><b><h3>* required</h3></b></td>
			</tr>
			<tr>
				<td>			
				</td>
				<td class="third">
					<input id="reset" type="reset" name="reset" value="Reset" />
					<input id="submit" type="submit" name="submit" value="Save" /><br><br>			
				</td>
			</tr>
			</table>
		</form>
		</td>
		</tr>
	</table>
	<div>
		<p id="funding_return"><a href="admin.php"> Return to Main Page</a></p>
	</div>
	</div>
</body>
</html>