<?php
	include "connection.php";
?>
<html>
	<head>
		<title> Delete a student </title>
		<link rel = "stylesheet" type = "text/css" href = "buttonmaking.css">
	</head>
	<body bgcolor = "aqua">
		<center> <h1 class = "myheader"> Delete a student </h1> </center>
		<h1> Warning : A data once deleted can not be recovered in any case. </h1>
		<form action = "Coep.php" method = "post">
			<p> Enter Roll Number of the student to delete : </p>
			<input type = "number" name = "deleteelement">
			<input type = "submit" value = "DELETE!">
		</form>
		<hr>
		<hr>
		<br>
		<br>
		<br>
		<big> <b> <p> In case you don't know the Roll Number, Please see here :  </p> </b> </big>
		<?php
			$selectall = "SELECT * FROM `Information`";
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
		<p> Deleting a data will remove it completely from database. In case you entered this link mistakely, This are the other options you can choose from :  </p>
		<p> Other Functions : </p>
		<table align = "center" width = "100%">
			<tr align = "center">
				<td class = "button"> <a href = "Coep.php" class = "myclass"> Go to Homepage </a> </td> 
				<td class = "button"> <a href = "insert.php" class = "myclass"> Add another entry </a> </td>
				<td class = "button"> <a href = "edit.php" class = "myclass"> Edit an entry </a> </td>
				<td class = "button"> <a href = "search.php" class = "myclass"> Search a student </a> </td>
			</tr>	
		</table>
	</body>
</html>

