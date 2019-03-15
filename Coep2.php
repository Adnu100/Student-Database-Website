<?php
	include "connection.php";
	if(isset($_POST[choosefrom])) {
		if($_POST[choosefrom] == "All Branches") {
			$selectall = "SELECT * FROM `Information`";
				}
		else {
			$selectall = "SELECT * FROM `Information` WHERE `Branch`='$_POST[choosefrom]'";
		}
	}
	else {
		$selectall = "SELECT * FROM `Information`";
	}	
?>
<html>
	<head>
		<title> Student Database </title>
		<link rel = "stylesheet" type = "text/css" href = "buttonmaking.css">
	</head>
	<body bgcolor = "aqua">
	<?php
		if($_POST[coepusername] == "Adnesh") {
			if($_POST[coeppass] == "password") {
	?>
		<center> <h1 class = "myheader"> Welcome To The Student Database </h1> </center>
		<hr>
		<hr>
		<br>
		<br>
		<br>
		<big> <b> <p> Student Information table: </p> </b> </big>
		<form action = "Coep.php" method = "post" target = "_top">
			<select name = "choosefrom">
							<option>All Branches</option>
							<option> Computer </option>
							<option> Mechanical </option>
							<option> E&TC </option>
							<option> Information Technology </option>
							<option> Electrical </option>
							<option> Civil </option>
							<option> Instrumentation </option>
							<option> Metallurgy </option>
			</select>
			<input type = "submit" value = "Go!">
		</form>
		<?php
			$run = mysqli_query($con, $selectall);
			if($run != TRUE) {
				echo "Not Connected!";
			}
			else {
		?>
		<table style = "border-color : red; padding : 5px 2px; background-color : grey;" border = "2" align = "center" width  = "100%">
			<tr bgcolor = "purple" style = "color : pink;">
				<th> Serial Number </th>
				<th> Roll Number </th> 
				<th> Student Name </th>
				<th> Branch </th>
				<th> Year </th>
				<th> Contact Number </th>
				<th> Gender </th>
				<th> Birth Date </th>
				<th> CGPA of student </th>
			</tr>
			<?php
				$mysr = 0;
				while($fetchdata = mysqli_fetch_assoc($run)) {
				$mysr++;
			?>
			<tr align = "center" bgcolor = "white">
				<td> <?php echo $mysr; ?> </td>
				<td> <?php echo $fetchdata[Rollno]; ?> </td>
				<td> <?php echo $fetchdata[FullName]; ?> </td>
				<td> <?php echo $fetchdata[Branch]; ?> </td>
				<td> <?php echo $fetchdata[Year]; ?> </td>
				<td> <?php echo $fetchdata[Contact]; ?> </td>
				<td> <?php echo $fetchdata[Gender]; ?> </td>
				<td> <?php echo $fetchdata[dob]; ?> </td>
				<td> <?php echo $fetchdata[CGPA]; ?> </td>
			</tr>
			<?php
				}
			?>
		</table>
		<?php
			}
		?>
		<br>
		<br>
		<br>
		<br>
		<table align = "center" width = "100%">
			<tr align = "center">
				<td class = "button"> <a href = "insert.php" class = "myclass"> Add another entry </a> </td>
				<td class = "button"> <a href = "edit.php" class = "myclass"> Edit an entry </a> </td>
				<td class = "button"> <a href = "delete.php" class = "myclass"> Delete an entry </a> </td>
				<td class = "button"> <a href = "search.php" class = "myclass"> Search a student </a> </td>
			</tr>	
		</table>
		<br>
		<br>
		<br>
		<br>
		<br>
		<p align = "right">
			<?php
				if($checkdelete) {
					echo "Record deleted. Now, can not be recovered.";
				}
				if(isset($_POST[toedit])) {
					if($checkedit) {
						echo "1 Student edited";
					}
				}	
				if(isset($_POST[Rollno])) {
					if($check) {
						echo "1 Student Information added successfully.";
					}
					else {
						echo "Information entry failed!";
					}
				}		
			?>
		</p>
		<?php
						}
					else { 
						echo "<h1>Incorrect Password!</h1>";
					}
			}
			else {
				echo "<h1>Incorrect Username!</h1>";				}
		?>
		<a class = "GoToHomepage" href = "Homepage.php"> Select a different Institute </a>
	</body>
</html>

