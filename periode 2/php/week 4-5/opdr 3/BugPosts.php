<!DOCTYPE html>
<html>
<head>
	<title>Bug Posts</title>
</head>
<body>
<?php
	if(empty($_POST['first_name']) || empty($_POST['last_name'])){
		echo "<p>You must fill in all fields! Click your
		browser's Back button to return to the Guest Book form.</p>";
	}
	else{
		$DBConnect = mysqli_connect("localhost", "root", "");
		$DBName = "bugreport";
		if(!mysqli_select_db ($DBConnect, $DBName))
		{
			echo "<p>There are no entries in the bug report!</p>";
		}
		else {
			$TableName = "bugs";
			$SQLstring = "SELECT first_name, last_name FROM ".$TableName;
			if ($stmt = mysqli_prepare($DBConnect, $SQLstring)) {
				mysqli_stmt_execute($stmt);
				mysqli_stmt_bind_result($stmt, $fname, $lname);
				mysqli_stmt_store_result($stmt);
				if (mysqli_stmt_num_rows($stmt) == 0) {
				echo "<p>There are no entries in the guest
				book!</p>";
			}
			else {
				echo "<p>The following bugs have signed our guest
				book:</p>";
				echo "<table width='100%' border='1'>";
				echo "<tr><th>First Name</th>
				 <th>Last Name </th></tr>";
				while (mysqli_stmt_fetch($stmt)) {
					echo "<tr><td>".$fname."</td>";
					echo "<td>".$lname."</td></tr>";
				}
			}
		}
			mysqli_stmt_close($stmt);
		}
		mysqli_close($DBConnect);
	}
?>
</body>
</html>