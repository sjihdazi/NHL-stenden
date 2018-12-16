<!DOCTYPE html>
<?php
require('config.php');
?>
<html>
	<head>
		<title>Opdr 3.3</title>
	</head>
	<body>
		<?php
		//Select data from database---
		//Define query
		$TableName = "reports";
		$sql = "SELECT * FROM " . $TableName;

		//Execute query
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<table width='100%' border='1'>
			<tr>
			<th>Name</th>
			<th>Version</th>
			<th>Hardware</th>
			<th>OS</th>
			<th>Frequency / day</th>
			<th>Solution</th>
			<th>Update</th>
			</tr>";
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["product_name"] . "</td>
				<td>" . $row["version"] . "</td>
				<td>" . $row["hardware"] . "</td>
				<td>" . $row["os"] . "</td>
				<td>" . $row["frequency"] . "</td>
				<td>" . $row["solution"] . "</td>
				<td><a href='UpdateBugReport.php?id=" . $row["ID"] . "&product_name=" . $row["product_name"] . "&version=" . $row["version"] . "&hardware=" . $row["hardware"] . "&os=" . $row["os"] . "&frequency=" . $row["frequency"] . "&solution=" . $row["solution"] . "'>Update</a></td>";
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "<p>Entries are NOT found.</p>";
		}
		// if ($stmt = mysqli_prepare($conn, $select)) {
		// 	mysqli_stmt_execute($stmt);

		// 	if ($mysqli_stmt_num_rows($stmt) == 0) {
		// 		echo "<p>There are no entries</p>";
		// 	}
		// } else {
		// 	echo "<p>Entries ARE FOUND.</p>";
			// echo "Dit zijn alle bugs:</p>";
			// echo "<table width='100%' border='1'>";
			// echo "<tr>
			// <th>Name</th>
			// <th>Version</th>
			// <th>Hardware</th>
			// <th>OS</th>
			// <th>Frequency / day</th>
			// <th>Solution</th>
			// </tr>";
			// while ($row = mysqli_stmt_fetch($stmt)) {
			// 	echo "<tr>
			// 	<td>" . $row["product_name"] . "</td>
			// 	<td>" . $row["version"] . "</td>
			// 	<td>" . $row["hardware"] . "</td>
			// 	<td>" . $row["os"] . "</td>
			// 	<td>" . $row["frequency"] . "</td>
			// 	<td>" . $row["solution"] . "</td>
			// 	</tr>";
			// }
			//}

		mysqli_close($conn);
		?>

		<p><a href="CreateBugReport.php">Create a bug report</a></p>
	</body>
</html>