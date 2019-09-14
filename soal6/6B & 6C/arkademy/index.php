<?php
	include_once("config.php");
	$result = mysqli_query($mysqli, "SELECT nama.name, nama.id, work.name AS 
	'work', kategori.salary FROM nama,WORK,kategori 
	WHERE nama.id_salary = kategori.id AND nama.id_work = work.id");

	$dropdown_salary = mysqli_query($mysqli, "SELECT * from kategori");
	$dropdown_work = mysqli_query($mysqli, "SELECT * from work");
?>

<html>
	<head>	
		<title>Homepage</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-2.2.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<body align="center">


		<table width='100%'  class="table">

		<tr>
		<thead class="thead-dark">
			<td><b>Name</b></td>
			<td><b>Work</b></td>
			<td><b>Salary</b></td>
			<td><b>Update</b></td>
		</thead>
		</tr>
		<?php 
		while($res = mysqli_fetch_array($result)) { 		
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['work']."</td>";
			echo "<td>".$res['salary']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
		</table>
	</body>
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#tambahData">Tambah Pegawai</button>
	<div id="tambahData" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Tambah Pegawai</h4>
		</div>
		<div class="modal-body">
		<form action="add.php" method="post">
			<input type="text" class="form-control" name="name" placeholder="Masukan Nama">
			<br>
			<select name="id_work" class="form-control">
						<?php
							while($res = mysqli_fetch_array($dropdown_work)){?>
						<option value="<?php echo $res['id'];?>" ><?php echo $res['name'];}?></option>
					</select>
			<br>
			<select name="id_salary" class="form-control">
						<?php
							while($res = mysqli_fetch_array($dropdown_salary)){?>
						<option value="<?php echo $res['id'];?>"  ><?php echo $res['salary'];}?></option>
					</select>
			</div>
			<div class="modal-footer">
			<input type="submit" name="Submit" value="Add" class="btn btn-default">
		</form>
			<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
		</div>
		</div>
	</div>
	
	</div>
</html>
