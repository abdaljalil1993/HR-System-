<?php
ob_start();

include'conn.php';

if(isset($_GET['fadi']))
	$x=$_GET['fadi'];

$result=mysqli_query($con,"select * from vacation where id='$x'");

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
<body style="background-color: #003b64">
	<?php
include'adminnav.php';
	?> 

<div class="container">
	<div class="alert alert-warning">
			<h1 class="text-center"><i class="fa fa-table"></i>  Edit Vacation  </h1>
		</div>


		<div class="row">

			<div class="col-md-2"></div>

			<div class="col-md-8">
				<div class="panel panel-warning">
			<div class="panel-heading">
				<h1 class="text-center text-uppercase">Edit  vacation Data </h1>
			</div>

			<div class="panel-body">
		<form action="editvac.php?fadi=<?php echo $x; ?>" method="post">
		<label ><h3>Employee Name : <span style="color: red"><?php echo $rr['name']; ?></span></h3></label>
				<br>
				<br>






		<label >Number of Vacation Days :</label>

		<input type="text" value="<?php echo $rr['taked']; ?>" placeholder="entertype of vacation"  class="form-control" name="take"><br>


	

		<label >Vacation Reason :</label>

		<input type="text" value="<?php echo $rr['type']; ?>" placeholder="entertype of vacation"  class="form-control" name="reason"><br>

		<label >Start Date :</label>

		<input type="text" value="<?php echo $rr['sd']; ?>" class="form-control" name="sd"><br>

<label >End Date :</label>

		<input type="text" value="<?php echo $rr['ed']; ?>" class="form-control" name="ed"><br>

	


		<input type="submit" value="Edit Information" class="btn btn-warning btn-lg" name="btn">
		
		</form>
			</div>

			<div class="panel-footer"></div>

		</div>
			</div>

			<div class="col-md-2"></div>
			




		</div>

</div>









<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

<?php

$name=$rr['name'];


$taked=isset($_POST['take'])?$_POST['take']:'';
$reason=isset($_POST['reason'])?$_POST['reason']:'';

$sd=isset($_POST['sd'])?$_POST['sd']:'';

$ed=isset($_POST['ed'])?$_POST['ed']:'';



if(isset($_POST['btn']))
{

$r=mysqli_query($con,"update vacation set taked='$taked',sd='$sd',ed='$ed',type='$reason' where id='$x'");
$r1=mysqli_query($con,"select * from vacation where name='$name'");
$num=0;
$remin=0;
while($row=mysqli_fetch_array($r1))
{
$num+=$row['taked'];
$remin=30 - $num;
}


$r2=mysqli_query($con,"update vacation set remin='$remin' where name='$name'");
$r3=mysqli_query($con,"update vac set remin='$remin',taked='$num' where name='$name'");	


if(isset($r3))
	{
		echo'
		<script> alert("Edit Data Successfully");</script>
		';
	}

	else{
	echo'
		<script> alert("Edit Data Failed Try Again");</script>
		';
}
}
ob_end_flush();
?>