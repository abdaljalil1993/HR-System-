<?php
ob_start();
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
<body style="background-color: #003b64">
	<?php
include'adminnav.php';
	?> 

<div class="container">
	<div class="alert alert-warning">
			<h1 class="text-center"><i class="fa fa-users"></i> Trainers Evaluations  </h1>
		</div>


<form action="te.php" method="post">

<div class="row">
		<div class="col-md-6 mr-4">
			<div class="panel panel-warning">
				<div class="panel-body">
					

						<label >Full Name  :</label>
					<input type="text" class="form-control " placeholder="Full Name" name="n"><br>
					
					<label >Job Title:</label>
					<input type="text" class="form-control " placeholder="Job Title" name="jt"><br>

					<label >salary :</label>
					<input type="text" class="form-control " placeholder="Salary " name="s"><br>
					<br>

					<label >start date :</label>
					<input type="text" class="form-control "  name="sd">
					
					<label >Commitment to working time :</label>
					<select class="form-control" name="wt">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>

					<label >Bear the stress of work :</label>
					<select class="form-control" name="stress">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>

					<label >knowledge of business requirment :</label>
					<select class="form-control" name="br">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>

					
	<label >percentage of trainees turnout to renew its course  :</label>
					<select class="form-control" name="percentage">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>


	<label >percentage of trainees attendance :</label>
					<select class="form-control" name="attendance">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>

					
	<label >Empowerment of the scientific content of the program  :</label>
					<select class="form-control" name="empower">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>
<label >his abillity to link the training material with the scientific reality of the trainers  :</label>
					<select class="form-control" name="mat">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>



	<label >speaking skills :</label>
					<select class="form-control" name="speak">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>


	<label >time management  :</label>
					<select class="form-control" name="timemanage">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>




				</div>
			</div>
		</div>


		<div class="col-md-6 mr-4">
			<div class="panel panel-warning">
				<div class="panel-body">

	<label >abbillity to interact and respond to trainers questions :</label>
					<select class="form-control" name="interact">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>


	<label >clarity of the coach voice :</label>
					<select class="form-control" name="clarity">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>



	<label >abbillity to communicate information :</label>
					<select class="form-control" name="communicate">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>

					<label >reparation and follow up :</label>
					<select class="form-control" name="reparation">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>

					<label >Abillty to Communicate :</label>
					<select class="form-control" name="com">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>

						<label >Abillty to add to work :</label>
					<select class="form-control" name="addtowork">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>


	<label >desire to learn and develop :</label>
					<select class="form-control" name="learndevelop">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>

	<label >make additional effort to work :</label>
					<select class="form-control" name="addefort">
						<option value="waek">weak</option>
						<option value="Average">Average</option>
						<option value="good">good</option>
						<option value="very good">very good</option>
						<option value="excellant">excellant</option>
					</select><br>


	


					<label>total job performance </label>
					<input type="text" class="form-control"  name="jobperf"><br>


<label>Operation Manager Suggestions and recommendations  </label>
					<textarea class="form-control"  name="opr"></textarea><br>


<label>HR recommendations  </label>
<textarea class="form-control"  name="hrr"></textarea><br>


<label>AQA Recommendations  </label>
<textarea class="form-control"  name="aqar"></textarea><br>
<input type="submit" value="save" class="btn btn-warning btn-block btn-lg" name="btn">
				</div>
			</div>
		</div>
	</div>

</form>
</div>



	<div class="footer" style="border:solid 1px #ffdb00;">
		<h2 style="color: #ffdb00;" class="text-center text-uppercase">HR BACT</h2>
	</div>

<?php

include'conn.php';

$name=isset($_POST['n'])?$_POST['n']:'';
$startdate=isset($_POST['sd'])?$_POST['sd']:'';
$salary=isset($_POST['s'])?$_POST['s']:'';
$jobtitle=isset($_POST['jt'])?$_POST['jt']:'';
$worktime=isset($_POST['wt'])?$_POST['wt']:'';
$stress=isset($_POST['stress'])?$_POST['stress']:'';
$businessrequirment=isset($_POST['br'])?$_POST['br']:'';
$percentage=isset($_POST['percentage'])?$_POST['percentage']:'';
$attendance=isset($_POST['attendance'])?$_POST['attendance']:'';
$empower=isset($_POST['empower'])?$_POST['empower']:'';
$mat=isset($_POST['mat'])?$_POST['mat']:'';
$speak=isset($_POST['speak'])?$_POST['speak']:'';
$timemanage=isset($_POST['timemanage'])?$_POST['timemanage']:'';
$interact=isset($_POST['interact'])?$_POST['interact']:'';
$clarity=isset($_POST['clarity'])?$_POST['clarity']:'';
$communicate=isset($_POST['communicate'])?$_POST['communicate']:'';
$reparation=isset($_POST['reparation'])?$_POST['reparation']:'';
$com=isset($_POST['com'])?$_POST['com']:'';
$addtowork=isset($_POST['addtowork'])?$_POST['addtowork']:'';
$learndevelop=isset($_POST['learndevelop'])?$_POST['learndevelop']:'';
$addefort=isset($_POST['addefort'])?$_POST['addefort']:'';

$jobperf=isset($_POST['jobperf'])?$_POST['jobperf']:'';

$opr=isset($_POST['opr'])?$_POST['opr']:'';

$hrr=isset($_POST['hrr'])?$_POST['hrr']:'';

$aqar=isset($_POST['aqar'])?$_POST['aqar']:'';

if(isset($_POST['btn']))
{
	$res=mysqli_query($con,"insert into 
	trainerevaluation(
	name,
	jobtitle,
	startdate,
	salary,
	worktime,
	stress,
	businessrequirment,
	percentage_turnout,
	attendance,
	content_empowerment,
	link_material,
	speaking,

	time_management,
	interact_respond,
	clarity_voice,
	communicate_information,
	reparation,
	communicate_ability,
	addtowork_ability,
	learn_develope,
	additional_effort,
	job_performance,
	operationmanager_recommendations,
	hr_recommendation,
	aqa_recommendation



	)
	values(
	'$name',
	'$jobtitle',
	'$startdate',
	'$salary',
	'$worktime',
	'$stress',
	'$businessrequirment',
	'$percentage',
	'$attendance',
	'$empower',
	'$mat',
	'$speak',
	'$timemanage',
	'$interact',
	'$clarity',
	'$communicate',
	'$reparation',
	'$com',
	'$addtowork',
	'$learndevelop',
	'$addefort',
	'$jobperf',
	'$opr',
	'$hrr',
	'$aqar')");
	if(isset($res))
	{
		echo'
		<script> alert("add trainer Evaluation Successfully");</script>
		';
	}

	else{
	echo'
		<script> alert("add trainer Evaluation Failed");</script>
		';
}
}
?>






<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
<?php
ob_end_flush();
?>