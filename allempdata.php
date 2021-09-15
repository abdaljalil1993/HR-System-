<?php
ob_start();
session_start();
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin DashBoard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

</head>
<body style="background-color: #fff">
	<?php
include'adminnav.php';
	?> 



<div class="container">
	<div class="alert alert-warning">
			<h1 class="text-center"><i class="fa fa-user"></i> Choose  Employee </h1>
			<label >Employee Name :</label>
			<form action="allempdata.php" method="post">
					<select name="n" class="form-control">
						<?php
						include'conn.php';
						
						$r=mysqli_query($con,"select * from emp");
						while($row=mysqli_fetch_array($r))
						{
							echo'
							<option value="'.$row['name'].'">'.$row['name'].'</option>

							';
						}



						?>
					</select><br>
<?php
$x='';
if(isset($_POST['btn']))
{
	 $x=isset($_POST['n'])?$_POST['n']:'';

header("Location: allempdata.php?fadi=".$x."");


}

if(isset($_GET['fadi']))
{
	$r1=mysqli_query($con,"select * from emp where name='$x'");
	$ro=mysqli_fetch_array($r1);
}



?>
<input type="submit" name="btn" class="btn btn-success" value="All Data">
</form>
		</div>

		







<div class="row">
		<div class="col-md-6 mr-4">
			<div class="panel panel-warning">
				<div class="panel-body">
					<h3 >Personal Data :</h3>

						<label >Employee ST :</label>
<input value="<?php echo $ro['st'];?>" type="text" class="form-control " placeholder="Full Name" name="st"><br>
					
					<label >Full Name :</label>
					<input value="<?php echo $ro['name'];?>" type="text" class="form-control " placeholder="Full Name" name="n"><br>

					<label >Residence :</label>
					<select name="re" class="form-control">
						<option value="Resident">Resident</option>
						<option value="Non-Resident">Non-Resident</option>
					</select><br>

					<label >Nationalty :</label>
					<input type="text" class="form-control " placeholder="Nationalty" name="nat"><br>
					
					<label >Qualification :</label>
					<input type="text" class="form-control" placeholder="Qualification" name="q"><br>

					<label >Job Name :</label>
					<input type="text" class="form-control" placeholder="Job Name.." name="j"><br>

					<label >Salary :</label>
					<input type="number" class="form-control" placeholder="Salary" name="s"><br>

					
				</div>
			</div>
		</div>


		<div class="col-md-6 mr-4">
			<div class="panel panel-warning">
				<div class="panel-body">
					<label >Rate :</label>
					<input type="text" class="form-control" placeholder="Rate" name="r"><br>

					<label >Date Of Birth :</label>
					<input type="Date" class="form-control" name="dob"><br>

					<label >Date Of Join :</label>
					<input type="Date" class="form-control" name="doj"><br>

					<label >Start Date :</label>
					<input type="Date" class="form-control" name="sd"><br>

					<label >End Date :</label>
					<input type="Date" class="form-control" name="ed"><br>

					<label >Viza End Date :</label>
					<input type="Date" class="form-control" name="vd"><br>

					<input type="submit" value="Save" class="btn btn-warning btn-lg" name="btn">
				</div>
			</div>
		</div>
	</div>

</div>


















<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

<?php
ob_end_flush();
?>