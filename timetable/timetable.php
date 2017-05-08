<?php
include( "code.php" );

$count = 0;
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/sb-admin.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="css/plugins/morris.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
			
				<a class="navbar-brand" href="index.html">Time Table</a>
			</div>
			<!-- Top Menu Items -->

			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li class="active">
						<a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Home</a>
					</li>
					<li>
						<a href=""><i class="fa fa-fw fa-bar-chart-o"></i> Courses View</a>
					</li>







				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>

		<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
                            Home <small>Time Table</small>
                        </h1>
						<select name="Reg_Courses" id="Reg_Courses">
							<option>None</option>
							<?php foreach($reg_courses as $r): ?>
							<option value="<?php $r['rs_id'] ;?>"><?php echo $r['course_Title']; ?></option>
							<?php endforeach;?>
						</select>
						<ol class="breadcrumb">
							<li class="active">
								<i class="fa fa-dashboard"></i> Home
							</li>
						</ol>
					</div>
				</div>
				<!-- /.row -->

				<div class="row">
					<div id="no-more-tables">
						<table class="col-md-12 table-bordered table-striped table-condensed cf">
							<thead class="cf">
								<tr>
									<th>Days</th>
									<th class="text-center" colspan="14">Time</th>
								</tr>

								<tr>
									<th></th>
									<th>08:30--10:00</th>
									<th>10:05--11:35</th>
									<th>11:40--01:10</th>
									<th>01:30--03:00</th>
									
									<th>03:00--04:30</th>
									<th>04:30--06:00</th>

								</tr>
							</thead>
							<tbody>
							<?php foreach($timeTabl as $row): ?>
								<tr>
										<?php foreach($row as $value):
										//echo($value['StartTimeId']);exit;
										?>
										<td><?php echo $value['DayName'];?></td>
										<?php if($value['StartTimeId']==1){?>
											<td>
												  <div style="width:187px;" class="panel panel-primary">
														<div class="panel-heading">
															<div class="row">
																<div class="col-xs-12">
																	<span><strong><?php echo $value['CT'];?></strong></span>
																</div>
																<div class="col-xs-12 text-right">
																	<div class="huge"><?php echo $value['Slot'];?></div>
																	<div class="badge bg-primary">Lecture Hall</div>
																</div>
															</div>
														</div>
														<a href="#">
															<div class="panel-footer">
																<span><?php echo $value['TeacherNAme'];?></span>
															</div>
														</a>
													</div>
											</td>
										<?php }?>
										<?php if($value['StartTimeId']==2){?>
											<td>
												  <div style="width:187px;" class="panel panel-primary">
														<div class="panel-heading">
															<div class="row">
																<div class="col-xs-12">
																	<span><strong><?php echo $value['CT'];?></strong></span>
																</div>
																<div class="col-xs-12 text-right">
																	<div class="huge"><?php echo $value['Slot'];?></div>
																	<div class="badge bg-primary">Lecture Hall</div>
																</div>
															</div>
														</div>
														<a href="#">
															<div class="panel-footer">
																<span><?php echo $value['TeacherNAme'];?></span>
															</div>
														</a>
													</div>
											</td>
										<?php }?>
										<?php if($value['StartTimeId']==3){?>
											<td>
												  <div style="width:187px;" class="panel panel-primary">
														<div class="panel-heading">
															<div class="row">
																<div class="col-xs-12">
																	<span><strong><?php echo $value['CT'];?></strong></span>
																</div>
																<div class="col-xs-12 text-right">
																	<div class="huge"><?php echo $value['Slot'];?></div>
																	<div class="badge bg-primary">Lecture Hall</div>
																</div>
															</div>
														</div>
														<a href="#">
															<div class="panel-footer">
																<span><?php echo $value['TeacherNAme'];?></span>
															</div>
														</a>
													</div>
											</td>
										<?php }?>
										<?php if($value['StartTimeId']==4){?>
											<td>
												  <div style="width:187px;"  class="panel panel-primary">
														<div class="panel-heading">
															<div class="row">
																<div class="col-xs-12">
																	<span><strong><?php if($value['CT']) echo $value['CT'];?></strong></span>
																</div>
																<div class="col-xs-12 text-right">
																	<div class="huge"><?php echo $value['Slot'];?></div>
																	<div class="badge bg-primary">Lecture Hall</div>
																</div>
															</div>
														</div>
														<a href="#">
															<div class="panel-footer">
																<span><?php echo $value['TeacherNAme'];?></span>
															</div>
														</a>
													</div>
											</td>
										<?php }?>
										<?php if($value['StartTimeId']==5){?>
											<td>
												  <div style="width:187px;" class="panel panel-primary">
														<div class="panel-heading">
															<div class="row">
																<div class="col-xs-12">
																	<span><strong><?php echo $value['CT'];?></strong></span>
																</div>
																<div class="col-xs-12 text-right">
																	<div class="huge"><?php echo $value['Slot'];?></div>
																	<div class="badge bg-primary">Lecture Hall</div>
																</div>
															</div>
														</div>
														<a href="#">
															<div class="panel-footer">
																<span><?php echo $value['TeacherNAme'];?></span>
															</div>
														</a>
													</div>
											</td>
										<?php }?>
										<?php if($value['StartTimeId']==6){?>
											<td>
												  <div style="width:187px;" class="panel panel-primary">
														<div class="panel-heading">
															<div class="row">
																<div class="col-xs-12">
																	<span><strong><?php echo $value['CT'];?></strong></span>
																</div>
																<div class="col-xs-12 text-right">
																	<div class="huge"><?php echo $value['Slot'];?></div>
																	<div class="badge bg-primary">Lecture Hall</div>
																</div>
															</div>
														</div>
														<a href="#">
															<div class="panel-footer">
																<span><?php echo $value['TeacherNAme'];?></span>
															</div>
														</a>
													</div>
											</td>
										<?php }?>
										<?php if($value['StartTimeId']==7){?>
											<td>
												  <div style="width:187px;" class="panel panel-primary">
														<div class="panel-heading">
															<div class="row">
																<div class="col-xs-12">
																	<span><strong><?php echo $value['CT'];?></strong></span>
																</div>
																<div class="col-xs-12 text-right">
																	<div class="huge"><?php echo $value['Slot'];?></div>
																	<div class="badge bg-primary">Lecture Hall</div>
																</div>
															</div>
														</div>
														<a href="#">
															<div class="panel-footer">
																<span><?php echo $value['TeacherNAme'];?></span>
															</div>
														</a>
													</div>
											</td>
										<?php }?>
										
										
										<?php endforeach;?>
								</tr>
								<?php endforeach;?>
									
							</tbody>

						</table>
					</div>
				</div>




			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Morris Charts JavaScript -->
	<script src="js/plugins/morris/raphael.min.js"></script>
	<script src="js/plugins/morris/morris.min.js"></script>
	<script src="js/plugins/morris/morris-data.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>

</html>