
<!DOCTYPE html>
<html>

<head>


	<html lang="en">

	<head>
		<title>Timetable</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>

		<div id="resulttitle">
			<font size="+6">

				<b><br /></b>
			</font>

		</div>
		<div id="exam"><br/>
			<font size="+3"><b class="body">

</b>

			</font>
		</div>
	</body>
	<div id="frmsrh">
		<div id="srh">


			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr height="50">
					<td colspan="2" align="center">
						<font size="+6" face="Calibri" color="green">
							<b>Time Table</b>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<br>
	<div id="frmsrh">
		<div id="srh">
			<form method="post" action="result.php">

				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr height="50">
						<td colspan="2" align="center">
							<font size="+2" face="Calibri" color="#red">
								<b> Search Student Timetable</b>
							</font>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<br>
	<div id="frmsrh">
		<div id="srh">
			<form method="post" action="reg_id.php">

				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr height="50">
						<td colspan="2" bgcolor="bgcolor" align="center">
							<font size="+2" face="Calibri" color="#000000">
								<b> Search by Student Id</b>
							</font>
						</td>
					</tr>
					<tr>


						<td width="41%">&nbsp;</td>
						<td width="59%">&nbsp;</td>

					</tr>
					<tr>

						<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Your Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						  
						  <td align="left">




							&nbsp;<input type="text" name="txtid" placeholder="Roll No(Required)" required="required" <h1 style="color:green;width:300px;height:25px;">
							</h1>


						</td>
					</tr>


		</div>
	</div>

	<tr>




		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>





	<tr>




		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>



	<tr>
		<td>&nbsp;</td>
		<td align="left">

			<a href="getresult.php"><button type="submit" name="Get_Result" style="color:black;width:150px; height:30px;">Get TimeTable</button></a>




			<input type="reset"  value="Clear" style="color:black;width:150px; height:30px;"/>

		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>

	</html>