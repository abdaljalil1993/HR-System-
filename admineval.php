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
			<h3 class="text-center"><i class="fa fa-user"></i> Adminstrative Evaluations  </h3>
		</div>

<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" id="xx">
		<thead>
			<tr>
				
				<th>Name</th>
				<th>Management </th>
				<th>Section</th>
				<th>Job Title</th>
				<th>Type Of Job</th>
				<th>Evaluation Perieod</th>
				<th>qualityofwork_points</th>
				<th>qualityofwork_time</th>
				<th>qualityofwork_result</th>
				<th>qualityofwork_duration</th>
				<th>accuracy_points</th>
				<th>accuracy_times</th>
				<th>accuracy_result</th>
				<th>accuracy_duration</th>
<th>development_points</th>
<th>development_time</th>
<th>development_result</th>
<th>development_duration</th>

<th>workontime_points</th>
<th>workontime_time</th>
<th>workontime_result</th>
<th>workontime_duration</th>

<th>communication_points</th>
<th>communication_time</th>
<th>communication_result</th>
<th>communication_duration</th>

<th>decisionmaking_point</th>
<th>decisionmaking_time</th>
<th>decisionmaking_result</th>
<th>decisionmaking_duration</th>

<th>documents_points</th>
<th>documents_time</th>
<th>documents_result</th>
<th>documents_duration</th>

<th>participation_points</th>
<th>participation_time</th>
<th>participation_result</th>
<th>participation_duration</th>

<th>planning_points</th>
<th>planning_time</th>
<th>planning_result</th>
<th>planning_duration</th>

<th>submitreport_points</th>
<th>submitreport_time</th>
<th>submitreport_result</th>
<th>submitreport_duration</th>

<th>computerdeal_points</th>
<th>computerdeal_time</th>
<th>computerdeal_result</th>
<th>computerdeal_duration</th>

<th>prioritizationspeed_points</th>
<th>prioritizationspeed_time</th>
<th>prioritizationspeed_result</th>
<th>prioritizationspeed_duration</th>

<th>learnability_points</th>
<th>learnability_time</th>
<th>learnability_result</th>
<th>learnability_duration</th>

<th>responding_points</th>
<th>responding_time</th>
<th>responding_result</th>
<th>responding_duration</th>

<th>understandrules_points</th>
<th>understandrules_time</th>
<th>understandrules_result</th>
<th>understandrules_duration</th>

<th>shareexperience_points</th>
<th>shareexperience_time</th>
<th>shareexperience_result</th>
<th>shareexperience_duration</th>

<th>appearance_points</th>
<th>appearance_time</th>
<th>appearance_result</th>
<th>appearance_duration</th>

<th>workwithoutsupervision_points</th>
<th>workwithoutsupervision_time</th>
<th>workwithoutsupervision_result</th>
<th>workwithoutsupervision_duration</th>

<th>relationship_points</th>
<th>relationship_time</th>
<th>relationship_result</th>
<th>relationship_duration</th>

<th>propertyandcustody_points</th>
<th>propertyandcustody_time</th>
<th>propertyandcustody_result</th>
<th>propertyandcustody_duration</th>

<th>collaborate_points</th>
<th>collaborate_time</th>
<th>collaborate_result</th>
<th>collaborate_duration</th>

<th>best achievements</th>
<th>recommendations</th>
<th>suggested programs</th>
<th>strength points</th>

<th>weak points</th>

<th>Delete</th>
<th>Update</th>


			</tr>
		</thead>

		<tbody>
			<?php
			include'conn.php';
			$e=mysqli_query($con,"select * from adminstartiveevaluations");

			while($row=mysqli_fetch_array($e))
			{
				echo'
				<tr>
					
					<td>'.$row['name'].'</td>
					<td>'.$row['management'].'</td>
					<td>'.$row['section'].'</td>
					<td>'.$row['job_title'].'</td>
					<td>'.$row['type_of_job'].'</td>
					<td>'.$row['evaluation_period'].'</td>
<td>'.$row['qualityofwork_points'].'</td>
<td>'.$row['qualityofwork_time'].'</td>
<td>'.$row['qualityofwork_result'].'</td>
<td>'.$row['qualityofwork_duration'].'</td>

<td>'.$row['accuracy_points'].'</td>
<td>'.$row['accuracy_time'].'</td>
<td>'.$row['accuracy_result'].'</td>
<td>'.$row['accuracy_duration'].'</td>

<td>'.$row['development_points'].'</td>
<td>'.$row['development_time'].'</td>
<td>'.$row['development_result'].'</td>
<td>'.$row['development_duration'].'</td>

<td>'.$row['workontime_points'].'</td>
<td>'.$row['workontime_time'].'</td>
<td>'.$row['workontime_result'].'</td>
<td>'.$row['workontime_duration'].'</td>

<td>'.$row['communication_points'].'</td>
<td>'.$row['communication_time'].'</td>
<td>'.$row['communication_result'].'</td>
<td>'.$row['communication_duration'].'</td>

<td>'.$row['decisionmaking_point'].'</td>
<td>'.$row['decisionmaking_time'].'</td>
<td>'.$row['decisionmaking_result'].'</td>
<td>'.$row['decisionmaking_duration'].'</td>

<td>'.$row['documents_points'].'</td>
<td>'.$row['documents_time'].'</td>
<td>'.$row['documents_result'].'</td>
<td>'.$row['documents_duration'].'</td>

<td>'.$row['participation_points'].'</td>
<td>'.$row['participation_time'].'</td>
<td>'.$row['participation_result'].'</td>
<td>'.$row['participation_duration'].'</td>

<td>'.$row['planning_points'].'</td>
<td>'.$row['planning_time'].'</td>
<td>'.$row['planning_result'].'</td>
<td>'.$row['planning_duration'].'</td>

<td>'.$row['submitreport_points'].'</td>
<td>'.$row['submitreport_time'].'</td>
<td>'.$row['submitreport_result'].'</td>
<td>'.$row['submitreport_duration'].'</td>

<td>'.$row['computerdeal_points'].'</td>
<td>'.$row['computerdeal_time'].'</td>
<td>'.$row['computerdeal_result'].'</td>
<td>'.$row['computerdeal_duration'].'</td>

<td>'.$row['prioritizationspeed_points'].'</td>
<td>'.$row['prioritizationspeed_time'].'</td>
<td>'.$row['prioritizationspeed_result'].'</td>
<td>'.$row['prioritizationspeed_duration'].'</td>

<td>'.$row['learnability_points'].'</td>
<td>'.$row['learnability_time'].'</td>
<td>'.$row['learnability_result'].'</td>
<td>'.$row['learnability_duration'].'</td>


<td>'.$row['responding_points'].'</td>
<td>'.$row['responding_time'].'</td>
<td>'.$row['responding_result'].'</td>
<td>'.$row['responding_duration'].'</td>


<td>'.$row['understandrules_points'].'</td>
<td>'.$row['understandrules_time'].'</td>
<td>'.$row['understandrules_result'].'</td>
<td>'.$row['understandrules_duration'].'</td>


<td>'.$row['shareexperience_points'].'</td>
<td>'.$row['shareexperience_time'].'</td>
<td>'.$row['shareexperience_result'].'</td>
<td>'.$row['shareexperience_duration'].'</td>


<td>'.$row['appearance_points'].'</td>
<td>'.$row['appearance_time'].'</td>
<td>'.$row['appearance_result'].'</td>
<td>'.$row['appearance_duration'].'</td>


<td>'.$row['workwithoutsupervision_points'].'</td>
<td>'.$row['workwithoutsupervision_time'].'</td>
<td>'.$row['workwithoutsupervision_result'].'</td>
<td>'.$row['workwithoutsupervision_duration'].'</td>


<td>'.$row['relationship_points'].'</td>
<td>'.$row['relationship_time'].'</td>
<td>'.$row['relationship_result'].'</td>
<td>'.$row['relationship_duration'].'</td>


<td>'.$row['propertyandcustody_points'].'</td>
<td>'.$row['propertyandcustody_time'].'</td>
<td>'.$row['propertyandcustody_result'].'</td>
<td>'.$row['propertyandcustody_duration'].'</td>


<td>'.$row['collaborate_points'].'</td>
<td>'.$row['collaborate_time'].'</td>
<td>'.$row['collaborate_result'].'</td>
<td>'.$row['collaborate_duration'].'</td>


<td>'.$row['bestachievements'].'</td>
<td>'.$row['recommendations'].'</td>
<td>'.$row['suggestedprograms'].'</td>
<td>'.$row['strengthpoints'].'</td>


<td>'.$row['weakpoints'].'</td>


<td><a href="admineval.php?id='.$row['id'].'" class="btn btn-danger">Delete</a></td>

<td><a href="editadmineval.php?id='.$row['id'].'" class="btn btn-info">Update</a></td>

					</tr>


				';
			}



		if(isset($_GET['id']))
		{
			$x=$_GET['id'];

			$t=mysqli_query($con,"delete from adminstartiveevaluations where id='$x'");
			if(isset($t)){
				header("Location: admineval.php");
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