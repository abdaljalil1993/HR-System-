<?php
ob_start();
session_start();
include'conn.php';

if(isset($_GET['fadi']))
	$x=$_GET['fadi'];

$result=mysqli_query($con,"select * from courses where id='$x'");

$rr=mysqli_fetch_array($result);
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
<body style="background-color: #7976a9">
	<?php
include'adminnav.php';
	?> 

<div class="container">
	<div class="alert alert-warning">
			<h3 class="text-center"><i class="fa fa-book"></i> Courses </h3>
		</div>


		<div class="row">

			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-warning">
			<div class="panel-heading">
				<h1 class="text-center text-uppercase">Edit Course </h1>
			</div>

			<div class="panel-body">
		<form action="editcourse.php?fadi=<?php  echo $x; ?>" method="post">
		<label >Employee Name : <?php echo $rr['name']; ?></label>
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



<label >Course Name :</label>
		<input type="text" value="<?php echo $rr['cname']; ?>" placeholder="enter Bonuse Reason"  class="form-control" name="cn"><br>

<label > last Course State : <?php echo $rr['state']; ?> </label>
<select name="st" class="form-control">
	<option value="Finished">Finished</option>
		<option value="Unfinished">Unfinished</option>
</select><br>

<label >Course Duration :</label>
<input type="text" value="<?php echo $rr['duration']; ?>"   class="form-control" name="du"><br>



		<input type="submit" value="Save" class="btn btn-warning btn-lg" name="btn">
		
		</form>
			</div>

			<div class="panel-footer"></div>

		</div>
			</div>

			<div class="col-md-3"></div>
			




		</div>

</div>









<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

<?php

$name=isset($_POST['n'])?$_POST['n']:'';
$cn=isset($_POST['cn'])?$_POST['cn']:'';
$st=isset($_POST['st'])?$_POST['st']:'';
$du=isset($_POST['du'])?$_POST['du']:'';







if(isset($_POST['btn']))
{
	
	$res=mysqli_query($con,"update 
	courses set name='$name' ,cname='$cn' ,state='$st' ,duration='$du' where id='$x'
	");
	if(isset($res))
	{
		echo'
		<script> alert("Edit Course Successfully");</script>
		';
	}

	else{
	echo'
		<script> alert("Edit Course failed.. Try Again");</script>
		';
}
}
ob_end_flush();
?>