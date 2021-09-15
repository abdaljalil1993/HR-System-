<?php
ob_start();
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Admin DashBoard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
</head>
<body style="background-color: #dedede">
	<?php
include'adminnav.php';
	?> 

<div class="container-fluid">
	<div class="alert alert-warning">
			<h3 class="text-center"><i class="fa fa-user"></i> Trainers Evaluations  </h3>
		</div>

<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="xx">
		<thead>
			<tr>
				
				<th>Name</th>
				<th>job title </th>
				<th>start date </th>
				<th>salary</th>
				<th>work time</th>
				<th>Bear the stress</th>
				<th>knowledge of business requirment</th>
				<th>percentage of trainees turnout to renew its course</th>
				<th>percentage of trainees attendance</th>
				<th>Empowerment of content of the program</th>
				<th> abillity to link material with reality</th>
				<th>speaking skills </th>
				<th>time management </th>
				<th>interact and respond to questions</th>
<th>clarity of the coach voice</th>
<th>abbillity to communicate information </th>
<th>reparation and follow up</th>
<th>Abillty to Communicate</th>

<th>Abillty to add to work</th>
<th>learn and develop</th>
<th>make additional effort to work</th>
<th>total job performance</th>

<th>Operation recommendations </th>
<th>
HR recommendations </th>
<th>
AQA Recommendations </th>

<th>Delete</th>
<th>Update</th>

			</tr>
		</thead>

		<tbody>
			<?php
			include'conn.php';
			$e=mysqli_query($con,"select * from trainerevaluation");

			while($row=mysqli_fetch_array($e))
			{
				echo'
				<tr>
<td>'.$row['name'].'</td>
<td>'.$row['jobtitle'].'</td>
<td>'.$row['startdate'].'</td>
<td>'.$row['salary'].'</td>
<td>'.$row['worktime'].'</td>
<td>'.$row['stress'].'</td>
<td>'.$row['businessrequirment'].'</td>
<td>'.$row['percentage_turnout'].'</td>
<td>'.$row['attendance'].'</td>
<td>'.$row['content_empowerment'].'</td>
<td>'.$row['link_material'].'</td>

<td>'.$row['speaking'].'</td>
<td>'.$row['time_management'].'</td>
<td>'.$row['interact_respond'].'</td>
<td>'.$row['clarity_voice'].'</td>

<td>'.$row['communicate_information'].'</td>
<td>'.$row['reparation'].'</td>
<td>'.$row['communicate_ability'].'</td>
<td>'.$row['addtowork_ability'].'</td>

<td>'.$row['learn_develope'].'</td>
<td>'.$row['additional_effort'].'</td>
<td>'.$row['job_performance'].'</td>
<td>'.$row['operationmanager_recommendations'].'</td>

<td>'.$row['hr_recommendation'].'</td>
<td>'.$row['aqa_recommendation'].'</td>

<td><a href="trainereval.php?id='.$row['id'].'" class="btn btn-danger">Delete</a></td>

<td><a href="#" class="btn btn-info">Update</a></td>
					</tr>


				';
			}



		if(isset($_GET['id']))
		{
			$x=$_GET['id'];

			$t=mysqli_query($con,"delete from trainerevaluation where id='$x'");
			if(isset($t)){
				header("Location: trainereval.php");
			}
		}

			?>
		</tbody>



		
	</table>

</div>


</div>









<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
    $('#xx').DataTable();
} );
</script>
</body>
</html>
<?php
ob_end_flush();
?>