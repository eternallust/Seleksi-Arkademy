<?php
	include_once("config.php");
	if(isset($_POST['update']))
	{	

		$id = mysqli_real_escape_string($mysqli, $_POST['id']);
		
		$name = mysqli_real_escape_string($mysqli, $_POST['name']);
		$salary = mysqli_real_escape_string($mysqli, $_POST['salary']);
		$work = mysqli_real_escape_string($mysqli, $_POST['work']);	
		
		$result = mysqli_query($mysqli, "UPDATE nama SET name='$name',id_work='$work',id_salary='$salary' WHERE id=$id");

		header("Location: index.php");
		
	}
?>