<?php
ob_start();
session_start();
include'conn.php';

if(isset($_GET['fadi']))
	$x=$_GET['fadi'];

$result=mysqli_query($con,"select * from credit where id='$x'");

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
			<h3 class="text-center"><i class="fa fa-dollar"></i> Edit Credit </h3>
		</div>


		<div class="row">

			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-warning">
			<div class="panel-heading">
				<h1 class="text-center text-uppercase">Edit Credit Data</h1>
			</div>

			<div class="panel-body">
		<form action="editcredit.php?fadi=<?php echo $x; ?>" method="post">
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



<label >Credit Reason :</label>
		<input type="text" value="<?php echo $rr['reason']; ?>" placeholder="enter Credit Reason"  class="form-control" name="r"><br>

<label >Credit Date :</label>
<input type="text" value="<?php echo $rr['dt']; ?>"   class="form-control" name="dt"><br>


<label >Credit Amount :</label>
<input type="text" value="<?php echo $rr['amount']; ?>"   class="form-control" placeholder="Amount " name="amount"><br>

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
$dt=isset($_POST['dt'])?$_POST['dt']:'';
$reason=isset($_POST['r'])?$_POST['r']:'';
$amount=isset($_POST['amount'])?$_POST['amount']:'';






if(isset($_POST['btn']))
{
	
	$res=mysqli_query($con,"update
	credit set name='$name',dt='$dt',reason='$reason',amount='$amount' where id='$x'
	");
	if(isset($res))
	{
		echo'
		<script> alert("Edit Credit Successfully");</script>
		';
	}

	else{
	echo'
		<script> alert("Edit Credit failed.. Try Again");</script>
		';
}
}
ob_end_flush();
?>