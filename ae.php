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
			<h1 class="text-center"><i class="fa fa-users"></i> Administrative Evaluations  </h1>
		</div>


<form action="ae.php" method="POST">

<div class="row">
		<div class="col-md-6 mr-4">
			<div class="panel panel-warning">
				<div class="panel-body">

		<h1>Administrative performance evaluation form</h1>
		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="name" class="form-control" name="ii"><br>
				<input type="text" placeholder="Management" class="form-control" name="im"><br>
				<input type="text" placeholder="section" class="form-control" name="i3"><br>
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Job Tilte" class="form-control" name="i4"><br>
				<input type="text" placeholder="Type of Job " class="form-control" name="i5"><br>
				<input type="text" placeholder="Evaluation Period" class="form-control" name="i6"><br>
			</div>
			<div class="col-md-6"></div>
		</div>








<h2>COMPETENCY ASSESSMENT</h2>
<h3>1- Quality Of Work</h3>
		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i7"><br>
				<input type="text" placeholder="Result" class="form-control" name="i8"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i9"><br>
				<input type="text" placeholder="Time " class="form-control" name="i10"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>



		<h3>2-Accuracy and commitment</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i11"><br>
				<input type="text" placeholder="Result" class="form-control" name="i12"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i13"><br>
				<input type="text" placeholder="Time " class="form-control" name="i14"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>



<h3>3- Development of method</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i15"><br>
				<input type="text" placeholder="Result" class="form-control" name="i16"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i17"><br>
				<input type="text" placeholder="Time " class="form-control" name="i18"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>


		<h3>4- Get the work done on time</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i19"><br>
				<input type="text" placeholder="Result" class="form-control" name="i20"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i21"><br>
				<input type="text" placeholder="Time " class="form-control" name="i22"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>



<h2>Management evaluation</h2>

<h3>1-Communication and communication</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i23"><br>
				<input type="text" placeholder="Result" class="form-control" name="i24"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i25"><br>
				<input type="text" placeholder="Time " class="form-control" name="i26"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>



<h3>2-Decision Making</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i27"><br>
				<input type="text" placeholder="Result" class="form-control" name="i28"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i29"><br>
				<input type="text" placeholder="Time " class="form-control" name="i30"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>





<h3>3-Documenting work and documents</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i31"><br>
				<input type="text" placeholder="Result" class="form-control" name="i32"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i33"><br>
				<input type="text" placeholder="Time " class="form-control" name="i34"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>



<h3>4-Participation</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i35"><br>
				<input type="text" placeholder="Result" class="form-control" name="i36"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i37"><br>
				<input type="text" placeholder="Time " class="form-control" name="i38"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>



<h3>5-Planning and organizing</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i39"><br>
				<input type="text" placeholder="Result" class="form-control" name="i40"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i41"><br>
				<input type="text" placeholder="Time " class="form-control" name="i42"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>





<h3>6-Submit reports and feedback</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i43"><br>
				<input type="text" placeholder="Result" class="form-control" name="i44"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i45"><br>
				<input type="text" placeholder="Time " class="form-control" name="i46"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>





<h3>7-The ability to deal with computers and technology</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i47"><br>
				<input type="text" placeholder="Result" class="form-control" name="i48"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i49"><br>
				<input type="text" placeholder="Time " class="form-control" name="i50"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>


<h3>8-Prioritization and speed</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i51"><br>
				<input type="text" placeholder="Result" class="form-control" name="i52"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i53"><br>
				<input type="text" placeholder="Time " class="form-control" name="i54"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>








					

				</div>
			</div>
		</div>


		<div class="col-md-6 mr-4">
			<div class="panel panel-warning">
				<div class="panel-body">
		




<h3>9- Ability to learn</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i55"><br>
				<input type="text" placeholder="Result" class="form-control" name="i56"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i57"><br>
				<input type="text" placeholder="Time " class="form-control" name="i58"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>




<h3>10- Responding to direct manager</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i59"><br>
				<input type="text" placeholder="Result" class="form-control" name="i60"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i61"><br>
				<input type="text" placeholder="Time " class="form-control" name="i62"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>



<h3>11-Ability to understand the rules of work</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i63"><br>
				<input type="text" placeholder="Result" class="form-control" name="i64"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i65"><br>
				<input type="text" placeholder="Time " class="form-control" name="i66"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>



<h3>12-Sharing the experience with team</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i67"><br>
				<input type="text" placeholder="Result" class="form-control" name="i68"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i69"><br>
				<input type="text" placeholder="Time " class="form-control" name="i70"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>



<h2>PERSONAL ASSESSMENT</h2>


<h3>1-Appearance and behavior</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i71"><br>
				<input type="text" placeholder="Result" class="form-control" name="i72"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i73"><br>
				<input type="text" placeholder="Time " class="form-control" name="i74"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>






<h3>2-The ability to work without supervision</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i75"><br>
				<input type="text" placeholder="Result" class="form-control" name="i76"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i77"><br>
				<input type="text" placeholder="Time " class="form-control" name="i78"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>





<h3>3-The relationship with colleagues and the manager</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i79"><br>
				<input type="text" placeholder="Result" class="form-control" name="i80"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i81"><br>
				<input type="text" placeholder="Time " class="form-control" name="i82"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>




<h3>4-Preserving the company property and custody</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i83"><br>
				<input type="text" placeholder="Result" class="form-control" name="i84"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i85"><br>
				<input type="text" placeholder="Time " class="form-control" name="i86"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>



<h3>5-Collaborate with the team</h3>

		<div class="row">
			<div class="col-md-6">
				<input type="text" placeholder="Points" class="form-control" name="i87"><br>
				<input type="text" placeholder="Result" class="form-control" name="i88"><br>
				
			</div>

			<div class="col-md-6">
				<input type="text" placeholder="Duration" class="form-control" name="i89"><br>
				<input type="text" placeholder="Time " class="form-control" name="i90"><br>
				
			</div>
			<div class="col-md-6"></div>
		</div>


<h3>The best achievements *</h3>
<textarea class="form-control" name="i91"></textarea>

<h3>HR Recommendations *</h3>
<textarea class="form-control" name="hr"></textarea>

<h3>AQA Recommendations *</h3>
<textarea class="form-control" name="i92"></textarea>

<h3>Suggested training programs to improve performance  *</h3>
<textarea class="form-control" name="i93"></textarea>

<h3>Strength points *</h3>
<textarea class="form-control" name="i94"></textarea>

<h3>Work points *</h3>
<textarea class="form-control" name="i95"></textarea>






<br>
<br>
		





<input type="submit" value="save" class="btn btn-warning btn-block btn-lg" name="btn">

</form>

<?php
include'conn.php';
$name=isset($_POST['ii'])?$_POST['ii']:'';
$management=isset($_POST['im'])?$_POST['im']:'';
$section=isset($_POST['i3'])?$_POST['i3']:'';
$jobtitle=isset($_POST['i4'])?$_POST['i4']:'';
$typeofjob=isset($_POST['i5'])?$_POST['i5']:'';
$perieod=isset($_POST['i6'])?$_POST['i6']:'';
$qualitypoint=isset($_POST['i7'])?$_POST['i7']:'';
$qualityresult=isset($_POST['i8'])?$_POST['i8']:'';
$qualityduration=isset($_POST['i9'])?$_POST['i9']:'';
$qualitytime=isset($_POST['i10'])?$_POST['i10']:'';
$accpoint=isset($_POST['i11'])?$_POST['i11']:'';
$accresult=isset($_POST['i12'])?$_POST['i12']:'';
$accduration=isset($_POST['i13'])?$_POST['i13']:'';
$acctime=isset($_POST['i14'])?$_POST['i14']:'';
$devpoint=isset($_POST['i15'])?$_POST['i15']:'';
$devresult=isset($_POST['i16'])?$_POST['i16']:'';
$devduration=isset($_POST['i17'])?$_POST['i17']:'';
$devtime=isset($_POST['i18'])?$_POST['i18']:'';
$workontimepoint=isset($_POST['i19'])?$_POST['i19']:'';
$workontimeresult=isset($_POST['i20'])?$_POST['i20']:'';
$workontimeduration=isset($_POST['i21'])?$_POST['i21']:'';
$workontimetime=isset($_POST['i22'])?$_POST['i22']:'';
$communicationpoint=isset($_POST['i23'])?$_POST['i23']:'';
$communicationresult=isset($_POST['i24'])?$_POST['i24']:'';
$communicationduration=isset($_POST['i25'])?$_POST['i25']:'';
$communicationtime=isset($_POST['i26'])?$_POST['i26']:'';
$decisionpoint=isset($_POST['i27'])?$_POST['i27']:'';
$decisionresult=isset($_POST['i28'])?$_POST['i28']:'';
$decisionduration=isset($_POST['i29'])?$_POST['i29']:'';
$decisiontime=isset($_POST['i30'])?$_POST['i30']:'';
$documentpoint=isset($_POST['i31'])?$_POST['i31']:'';
$documentresult=isset($_POST['i32'])?$_POST['i32']:'';
$documentduration=isset($_POST['i33'])?$_POST['i33']:'';
$documenttime=isset($_POST['i34'])?$_POST['i34']:'';
$participationpoint=isset($_POST['i35'])?$_POST['i35']:'';
$participationresult=isset($_POST['i36'])?$_POST['i36']:'';
$participationduration=isset($_POST['i37'])?$_POST['i37']:'';
$participationtime=isset($_POST['i38'])?$_POST['i38']:'';
$planningpoint=isset($_POST['i39'])?$_POST['i39']:'';
$planningresult=isset($_POST['i40'])?$_POST['i40']:'';
$planningduration=isset($_POST['i41'])?$_POST['i41']:'';
$planningtime=isset($_POST['i42'])?$_POST['i42']:'';
$submitreportpoint=isset($_POST['i43'])?$_POST['i43']:'';
$submitreportresult=isset($_POST['i44'])?$_POST['i44']:'';
$submitreportduration=isset($_POST['i45'])?$_POST['i45']:'';
$submitreporttime=isset($_POST['i46'])?$_POST['i46']:'';
$computerdealpoint=isset($_POST['i47'])?$_POST['i47']:'';
$computerdealresult=isset($_POST['i48'])?$_POST['i48']:'';
$computerdealduration=isset($_POST['i49'])?$_POST['i49']:'';
$computerdealtime=isset($_POST['i50'])?$_POST['i50']:'';
$prioritizationspeedpoint=isset($_POST['i51'])?$_POST['i51']:'';
$prioritizationspeedresult=isset($_POST['i52'])?$_POST['i52']:'';
$prioritizationspeedduration=isset($_POST['i53'])?$_POST['i53']:'';
$prioritizationspeedtime=isset($_POST['i54'])?$_POST['i54']:'';
$learnabilitypoint=isset($_POST['i55'])?$_POST['i55']:'';
$learnabilityresult=isset($_POST['i56'])?$_POST['i56']:'';
$learnabilityduration=isset($_POST['i57'])?$_POST['i57']:'';
$learnabilitytime=isset($_POST['i58'])?$_POST['i58']:'';
$respondingpoint=isset($_POST['i59'])?$_POST['i59']:'';
$respondingresult=isset($_POST['i60'])?$_POST['i60']:'';
$respondingduration=isset($_POST['i61'])?$_POST['i61']:'';
$respondingtime=isset($_POST['i62'])?$_POST['i62']:'';
$understandrulespoint=isset($_POST['i63'])?$_POST['i63']:'';
$understandrulesresult=isset($_POST['i64'])?$_POST['i64']:'';
$understandrulesduration=isset($_POST['i65'])?$_POST['i65']:'';
$understandrulestime=isset($_POST['i66'])?$_POST['i66']:'';
$sharepoint=isset($_POST['i67'])?$_POST['i67']:'';
$shareresult=isset($_POST['i68'])?$_POST['i68']:'';
$shareduration=isset($_POST['i69'])?$_POST['i69']:'';
$sharetime=isset($_POST['i70'])?$_POST['i70']:'';
$appereancepoint=isset($_POST['i71'])?$_POST['i71']:'';
$appereanceresult=isset($_POST['i72'])?$_POST['i72']:'';
$appereanceduration=isset($_POST['i73'])?$_POST['i73']:'';
$appereancetime=isset($_POST['i74'])?$_POST['i74']:'';
$supervisionpoint=isset($_POST['i75'])?$_POST['i75']:'';
$supervisionresult=isset($_POST['i76'])?$_POST['i76']:'';
$supervisionduration=isset($_POST['i77'])?$_POST['i77']:'';
$supervisiontime=isset($_POST['i78'])?$_POST['i78']:'';
$relationshippoint=isset($_POST['i79'])?$_POST['i79']:'';
$relationshipresult=isset($_POST['i80'])?$_POST['i80']:'';
$relationshipduration=isset($_POST['i81'])?$_POST['i81']:'';
$relationshiptime=isset($_POST['i82'])?$_POST['i82']:'';
$custodypoint=isset($_POST['i83'])?$_POST['i83']:'';
$custodyresult=isset($_POST['i84'])?$_POST['i84']:'';
$custodyduration=isset($_POST['i85'])?$_POST['i85']:'';
$custodytime=isset($_POST['i86'])?$_POST['i86']:'';
$collaboratepoint=isset($_POST['i87'])?$_POST['i87']:'';
$collaborateresult=isset($_POST['i88'])?$_POST['i88']:'';
$collaborateduration=isset($_POST['i89'])?$_POST['i89']:'';
$collaboratetime=isset($_POST['i90'])?$_POST['i90']:'';
$best=isset($_POST['i91'])?$_POST['i91']:'';
$recommendations=isset($_POST['i92'])?$_POST['i92']:'';
$suggested=isset($_POST['i93'])?$_POST['i93']:'';
$strength=isset($_POST['i94'])?$_POST['i94']:'';
$weak=isset($_POST['i95'])?$_POST['i95']:'';
$hr=isset($_POST['hr'])?$_POST['hr']:'';

if(isset($_POST['btn']))
{
	print_r($_REQUEST);
	$r=mysqli_query($con,"insert into 
		adminstartiveevaluations(name,
		management,
		section,
		job_title,
		type_of_job,
		evaluation_period,
		qualityofwork_points,
		qualityofwork_time,
		qualityofwork_result,
		qualityofwork_duration,
		accuracy_points,
		accuracy_time,
		accuracy_result,
		accuracy_duration,
		development_points,
		development_time,
		development_result,
		development_duration,
		workontime_points,
		workontime_time,
		workontime_result,
		workontime_duration,
		communication_points,
		communication_time,
		communication_result,
		communication_duration,
		decisionmaking_point,
		decisionmaking_time,
		decisionmaking_result,
		decisionmaking_duration,
		documents_points,
		documents_time,
		documents_result,
		documents_duration,
		participation_points,
		participation_time,
		participation_result,
		participation_duration,
		
		planning_points,
		planning_time,
		planning_result,
		planning_duration,
		submitreport_points,
		submitreport_time,
		submitreport_result,
		submitreport_duration,
		computerdeal_points,
		computerdeal_time,
		computerdeal_result,
		computerdeal_duration,
		prioritizationspeed_points,
		prioritizationspeed_time,
		prioritizationspeed_result,
		prioritizationspeed_duration,
		learnability_points,
		learnability_time,
		learnability_result,
		learnability_duration,
		responding_points,
		responding_time,
		responding_result,
		responding_duration,
		
		understandrules_points,
		understandrules_time,
		understandrules_result,
		understandrules_duration,
		shareexperience_points,
		shareexperience_time,
		shareexperience_result,
		shareexperience_duration,
		appearance_points,
		appearance_time,
		appearance_result,
		appearance_duration,
		workwithoutsupervision_points,
		workwithoutsupervision_time,
		workwithoutsupervision_result,
		workwithoutsupervision_duration,
		relationship_points,
		relationship_time,
		relationship_result,
		relationship_duration,
		propertyandcustody_points,
		propertyandcustody_time,
		propertyandcustody_result,
		propertyandcustody_duration,
		collaborate_points,
		collaborate_time,
		collaborate_result,
		collaborate_duration,
		bestachievements,
		recommendations,
		suggestedprograms,
		strengthpoints,
		weakpoints
		hr


		)
		values(
		'".$name."',
		'".$management."',
		'".$section."',
		'".$jobtitle."',
		'".$typeofjob."',
		'$perieod',
		'$qualitypoint',
		'$qualitytime',
		'$qualityresult',
		'$qualityduration',
		'$accpoint',
		'$acctime',
		'$accresult',
		'$accduration',
		'$devpoint',
		'$devtime',
		'$devresult',
		'$devduration',
		'$workontimepoint',
		'$workontimetime',
		'$workontimeresult',
		'$workontimeduration',
		'$communicationpoint',
		'$communicationtime',
		'$communicationresult',
		'$communicationduration',
		'$decisionpoint',
		'$decisiontime',
		'$decisionresult',
		'$decisionduration',
		'$documentpoint',
		'$documenttime',
		'$documentresult',
		'$documentduration',
		'$participationpoint',
		'$participationtime',
		'$participationresult',
		'$participationduration',
		'$planningpoint',
		'$planningtime',
		'$planningresult',
		'$planningduration',
		'$submitreportpoint',
		'$submitreporttime',
		'$submitreportresult',
		'$submitreportduration',
		'$computerdealpoint',
		'$computerdealtime',
		'$computerdealresult',
		'$computerdealduration',
		'$prioritizationspeedpoint',
		'$prioritizationspeedtime',
		'$prioritizationspeedresult',
		'$prioritizationspeedduration',
		'$learnabilitypoint',
		'$learnabilitytime',
		'$learnabilityresult',
		'$learnabilityduration',
		'$respondingpoint',
		'$respondingtime',
		'$respondingresult',
		'$respondingduration',
		'$understandrulespoint',
		'$understandrulestime',
		'$understandrulesresult',
		'$understandrulesduration',
		'$sharepoint',
		'$sharetime',
		'$shareresult',
		'$shareduration',
		'$appereancepoint',
		'$appereancetime',
		'$appereanceresult',
		'$appereanceduration',
		'$supervisionpoint',
		'$supervisiontime',
		'$supervisionresult',
		'$supervisionduration',
		'$relationshippoint',
		'$relationshiptime',
		'$relationshipresult',
		'$relationshipduration',
		'$custodypoint',
		'$custodytime',
		'$custodyresult',
		'$custodyduration',
		'$collaboratepoint',
		'$collaboratetime',
		'$collaborateresult',
		'$collaborateduration',
		'$best',
		'$recommendations',
		'$suggested',
		'$strength',
		'$weak',
		'$hr'
	)");


	
	if(isset($r))
	{
		echo'<script>alert("Evaluation Submited Successfully");<script>';
	}

	else{
		echo'<script>alert("Evaluation Submition Failed");<script>';
	}


}
?>


				</div>
			</div>
		</div>
	</div>


</div>




	<div class="footer" style="border:solid 1px #ffdb00;">
		<h2 style="color: #ffdb00;" class="text-center text-uppercase">HR BACT</h2>
	</div>








<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
<?php
ob_end_flush();
?>