<?php
	include "connection.php";
?>
<html>
	<head>
		<title> Student Search </title>
		<link rel = "stylesheet" type = "text/css" href = "buttonmaking.css">
	</head>
	<body bgcolor = "aqua">
		<center> <h1 class = "myheader"> Search A Student <h1> </center>
		<form action = "search.php" method = "post">
		<center> <p class = "grey"> Enter the roll number of Student : &nbsp&nbsp&nbsp <input type = "number" name = "Rollno"> &nbsp&nbsp&nbsp&nbsp&nbsp<input type = "submit" value = "search"> </p> </center>
		<?php
			if(isset($_POST[Rollno])) {
				$selectall = "SELECT * FROM `Information` WHERE `Rollno`='$_POST[Rollno]'";
				$run = mysqli_query($con, $selectall);
				if($run != TRUE) {
					echo "Not Connected!";
				}
				else {
					$fetchdata = mysqli_fetch_assoc($run);
					if($fetchdata) {
		?>
		<center>
		<table border = "2" class = "infotable" bgcolor = "white">
			<tr>
				<td class = "right" id = "myid"> Name : </td>
				<td id = "myid2"> <?php echo $fetchdata[FullName]; ?> </td>
			</tr>
			<tr>
				<td class = "right" id = "myid"> Roll Number :  </td>
				<td id = "myid2"> <?php echo $fetchdata[Rollno]; ?> </td>
			</tr>
			<tr>
				<td class = "right" id = "myid"> Branch : </td>
				<td id = "myid2"> <?php echo $fetchdata[Branch]; ?> </td>
			</tr>
			<tr>
				<td class = "right" id = "myid">Year : </td>
				<td id = "myid2"> <?php echo $fetchdata[Year]; ?> </td>
			</tr>
			<tr>
				<td class = "right" id = "myid"> Contact Number : </td>
				<td id = "myid2"> <?php echo $fetchdata[Contact]; ?> </td>
			</tr>
			<tr>
				<td class = "right" id = "myid"> Gender : </td>
				<td id = "myid2"> <?php echo $fetchdata[Gender]; ?> </td>
			</tr>
			<tr>
				<td class = "right" id = "myid"> Birth Date : </td>
				<td id = "myid2"> <?php echo $fetchdata[dob]; ?> </td>
			</tr>
			<tr>
				<td class = "right" id = "myid"> CGPA : </td>
				<td id = "myid2"> <?php echo $fetchdata[CGPA]; ?> </td>
			</tr>	
		</table>
		<center>
		<?php
					}
				}	
				
			}	
		?>
		<br>
		<br>
		<br>
		<?php
			if(isset($_POST[Rollno])) {
				if(!($fetchdata)) {
					echo "<center> <h1> No Student with Roll number : $_POST[Rollno] in the database currently. Do you want to add a student ?  </h1> </center> <br>";
		?>
		<br>
		<br>
		<br>
		<br>
		<center> <a class = "button" href = "insert.php"> Add A Student </a> </center>
		<?php
				}
			}
		?>
		<?php
			if(!($fetchdata)) { 
		?>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<?php
			}
		?>
		<center class = "button"> <a href = "Coep.php" class = "myclass"> Go Back to Student Information Homepage </a> </center>
	</body>
</html>
