<html>
	<head>
		<title> Student Inforamation Edit Form </title>
		<link rel = "stylesheet" type = "text/css" href = "buttonmaking.css">
	</head>
	<body bgcolor = "aqua">
		<center> <h1 class = "myheader"> New Student Editing Form </h1> </center>
		<hr>
		<hr>
		<br>
		<br>
		<br>
		<br>
		<form action = "Coep.php" method = "post">
		<p> Enter the Roll Number of the Student whose information you want to update : </p>
		<input type = "number" name = "toedit" required = "required">
			<center> <table border = "2" align = "center" class = "tablestyle">
				<tr>
					<center> <b style = "font-size : 200%;"> Update the following information : </b> </center>
				</tr>
				<tr>
					<td class = "right"> Name :  </td>
					<td> <input type = "text" name = "FullName" size = "50" required = "required"> </td>
				</tr>
				<tr>
					<td class = "right"> Branch : </td>
					<td> 
						<select name = "Branch">
							<option> Computer </option>
							<option> Mechanical </option>
							<option> E&TC </option>
							<option> Information Technology </option>
							<option> Electrical </option>
							<option> Civil </option>
							<option> Instrumentation </option>
							<option> Metallurgy </option>
						</select> 
					</td>
				</tr>
				<tr>
					<td class = "right"> Year : </td>
					<td> <input type = "text" name = "Year"> </td>
				</tr>
				<tr>
					<td class = "right"> Contact Number : </td>
					<td> <input type = "tel" name = "Contact"> </td>
				</tr>
				<tr>
					<td class = "right"> Gender : </td>
					<td> <input type = "radio" name = "Gender" value = "Male"> Male &nbsp&nbsp&nbsp <input type = "radio" name = "Gender" value = "Female"> Female &nbsp&nbsp&nbsp </td>
				</tr>
				<tr>
					<td class = "right"> Date of Birth : </td>
					<td> 
						<table>
						<tr> <td> Day : </td> <td> <input type = "number" name = "day"> </td> </tr> 
						<tr> <td> Month : </td> <td> <input type = "number" name = "month"> </td> </tr> 
						<tr> <td> Year : </td> <td> <input type = "number" name = "year"> </td> <tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class = "right"> CGPA : </td>
					<td> <input type = "text" name = "CGPA" required = "required"> </td>
				</tr>
			</table> </center>
			<center> <input type = "Submit" value = "Submit Information"> </center>
		</form>
		<center class = "button"> <a href = "Coep.php" class = "myclass"> Go Back to Student Information Homepage </a> </center>
	</body>
</html>
