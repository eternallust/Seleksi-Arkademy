<?php
	include_once("config.php");
	$id = $_GET['id'];
	$result = mysqli_query($mysqli, "SELECT * from nama where  nama.id=$id");
	$dropdown_salary = mysqli_query($mysqli, "SELECT * from kategori");
	$dropdown_work = mysqli_query($mysqli, "SELECT * from work");
	while($res = mysqli_fetch_array($result))
	{
		$name = $res['name'];
		$id_employee = $res['id'];
	}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/bootstrap.js"></script>
<script src="js/jquery-2.2.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="update.php">
	<input type="hidden" name="id" value="<?php echo $id;?>"">
		<table border="0" align="center">
			<tr> 
				<td>Name</td><td>:</td>
				<td><input type="text" class="form-control" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Salary</td><td>:</td>
				<td>
					<select name="salary" class="form-control">
						<?php
							while($res = mysqli_fetch_array($dropdown_salary)){?>
						<option value="<?php echo $res['id'];?>"  ><?php echo $res['salary'];}?></option>
					</select>
				</td>
			</tr>
			<tr> 
				<td>Work</td><td>:</td>
				<td>
				<select name="work" class="form-control">
						<?php
							while($res = mysqli_fetch_array($dropdown_work)){?>
						<option value="<?php echo $res['id'];?>" ><?php echo $res['name'];}?></option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
		</table>
		<br>
		<input type="submit" name="update" value="Update" class="btn btn-default" align="center">
	</form>
</body>
</html>
