<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$id_work = mysqli_real_escape_string($mysqli, $_POST['id_work']);
	$id_salary = mysqli_real_escape_string($mysqli, $_POST['id_salary']);
			
	$result = mysqli_query($mysqli, "INSERT INTO nama VALUES('','$name','$id_work','$id_salary')");
	header("Location: index.php");
	}

?>
</body>
</html>
