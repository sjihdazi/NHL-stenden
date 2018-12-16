<!DOCTYPE html>
<?php
require('config.php');
?>
<html>
	<head>
		<title>Opdr 3.3</title>
	</head>
	<body>
		<form action="UpdateBugReport.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
			<input type="text" name="product_name" placeholder="Product name" value="<?php echo $_GET['product_name'] ?>" />
			<input type="number" name="version" placeholder="Version" value="<?php echo $_GET['version'] ?>" />
			<input type="text" name="hardware" placeholder="Hardware" value="<?php echo $_GET['hardware'] ?>" />
			<input type="text" name="os" placeholder="OS" value="<?php echo $_GET['os'] ?>" />
			<input type="number" name="frequency" placeholder="Frequency / day" value="<?php echo $_GET['frequency'] ?>" />
			<input type="text" name="solution" placeholder="Solution" value="<?php echo $_GET['solution'] ?>" />
			<input type="submit" name="submit" value="Submit" />
		</form>
		<?php
		if (empty($_POST['product_name']) || empty($_POST['version']) || empty($_POST['hardware']) || empty($_POST['os']) || empty($_POST['frequency']) || empty($_POST['solution'])) {
			echo "<p>You must fill in every input field.</p>";
		} else {
			//INSERT data from database---
			$ID = $_POST['id'];

			$product_name = htmlentities($_POST["product_name"]);
			$version = htmlentities($_POST["version"]);
			$hardware = htmlentities($_POST["hardware"]);
			$os = htmlentities($_POST["os"]);
			$frequency = htmlentities($_POST["frequency"]);
			$solution = htmlentities($_POST["solution"]);

			$TableName = "reports";
			$sql = "UPDATE ". $TableName ." SET product_name='$product_name', version='$version', hardware='$hardware', os='$os', frequency='$frequency', solution='$solution' WHERE ID='" . $ID . "'";

			if (mysqli_query($conn, $sql)) {
				echo "Record updated succesfully.";
			} else {
				echo "Error: " . $sql . "<br />" . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
		?>

		<p><a href="index.php">Back to home</a></p>
	</body>
</html>