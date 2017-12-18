<!DOCTYPE html>
<html lang="en">
<head>
<title>MIS System</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="assets/css/fullcalendar.css" />
<link rel="stylesheet" href="assets/css/matrix-style.css" />
<link rel="stylesheet" href="assets/css/matrix-media.css" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/jquery.gritter.css" />
<link href='css/googleapi.css' rel='stylesheet' type='text/css'>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'subheader.php'; ?>
</head>
<body>
	<!--main-container-part-->
	<div id="content">
		<!--breadcrumbs-->
		<div id="content-header">
			<div id="breadcrumb">
				<a href="index.html" title="Go to Home" class="tip-bottom"><i
					class="icon-home"></i> Home</a>
			</div>
		</div>
		<!--End-breadcrumbs-->

		<!--Action boxes-->
		<div class="container-fluid">
			<div class="quick-actions_homepage">
				<ul class="quick-actions">
					<li class="bg_lb"><a href="index.html"> <i
							class="icon-dashboard"></i> <span class="label label-important">20</span>
							My Dashboard
					</a></li>
					<li class="bg_lg span3"><a href="charts.html"> <i
							class="icon-signal"></i>Performance
					</a></li>
					<li class="bg_lg"><a href="calendar.html"> <i
							class="icon-calendar"></i> Calendar
					</a></li>
					<li class="bg_lr"><a href="error404.html"> <i
							class="icon-info-sign"></i> Error
					</a></li>

				</ul>
			</div>
			<!--End-Action boxes-->


			<!--end-main-container-part-->
			<div class="row-fluid">
				<div class="span6">
					<div class="widget-box">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"><i class="icon-ok"></i></span>
								<h5>Progress Box</h5>
							</div>
							<div class="widget-content">
								<ul class="unstyled">
									<li><span class="icon24 icomoon-icon-arrow-up-2 green"></span>
										81% Student Presen <span class="pull-right strong">567</span>
										<div class="progress progress-striped ">
											<div style="width: 81%;" class="bar"></div>
										</div></li>
									<li><span class="icon24 icomoon-icon-arrow-up-2 green"></span>
										72% Teacher Present <span class="pull-right strong">507</span>
										<div class="progress progress-success progress-striped ">
											<div style="width: 72%;" class="bar"></div>
										</div></li>
									<li><span class="icon24 icomoon-icon-arrow-down-2 red"></span>
										83% Employee Present <span class="pull-right strong">457</span>
										<div class="progress progress-warning progress-striped ">
											<div style="width: 53%;" class="bar"></div>
										</div></li>
									<li><span class="icon24 icomoon-icon-arrow-up-2 green"></span>
										3% Online Users <span class="pull-right strong">8</span>
										<div class="progress progress-danger progress-striped ">
											<div style="width: 3%;" class="bar"></div>
										</div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Chart-box-->
			<div class="widget-content">
				<div class="row-fluid">
					<div class="span3">
						<ul class="site-stats">
							<li class="bg_lh"><i class="icon-user"></i> <strong>2540</strong>
								<small>Total Student</small></li>
							<li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong>
								<small>New Students </small></li>
							<li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong>
								<small>Teacher Present</small></li>
							<li class="bg_lh"><i class="icon-tag"></i> <strong>9540</strong>
								<small>Classes</small></li>
							<li class="bg_lh"><i class="icon-repeat"></i> <strong>10</strong>
								<small>Pending Orders</small></li>
							<li class="bg_lh"><i class="icon-globe"></i> <strong>8540</strong>
								<small>Online Orders</small></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End-Chart-box-->


	<!--end-main-container-part-->

	<!-- including footer part -->
	<?php include 'footer.php'; ?>
</body>
</html>
