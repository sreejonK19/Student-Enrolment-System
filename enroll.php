<?php
	include_once("bg.php");
	include_once("config.php");
	ob_start();
	session_start();

	if( (!isset($_SESSION['stduid2'])) && (!isset($_SESSION['stdpwd2'])) ) {
		header('Location: default.php') ;
	}
?>

<html>
	<head></head>
	<title></title>
	<body>
		<?php
			$sql = "SELECT * FROM last_entry WHERE id='1'";
			$result = mysql_query($sql);
			if( $row=mysql_fetch_array($result) ) {
				echo "Last Entry was Admission Number: ";
				echo "<b>".$row['adm_no']."</b>";
			}
			else {
				echo "No entry found in the Database";
			}
		?>

		<br><br><br><br>
		<center>
			<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">
			<br><br>

			<table border="20" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
				<form method="POST" action="enrollpro.php">
					<TR>
						<TD><b>ADMISSION NO.</b></TD>
						<TD><input type="text" name="admno" style="width:150px;height:20px" required autofocus></TD>
					</TR>

					<TR>
						<TD><b>STUDENT NAME</b></TD>
						<TD><input type="text" name="name" style="width:150px;height:20px" required></TD>
					</TR>

					<TR>
						<TD></TD>
						<TD>
							&nbsp;
							<input type="submit" name="enroll" value="Enroll" style="height:30px; width:90px">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" value="Clear" style="height:30px;width:90px">
						</TD>
					</TR>
				</form>
			</table>
		</center>
	</body>
</html>