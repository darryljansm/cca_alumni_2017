<?php
require_once('core/init.php');
if(!Session::sessionExists('admin-logged')) {
	Redirect::to('admin-login');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>CCAAA | Admin </title>

		<!-- Bootstrap -->
		<link href="resources/plugins/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="resources/plugins/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="resources/plugins/gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- bootstrap-wysiwyg -->
		<link href="resources/plugins/gentelella-master/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">

		<!-- Custom styling plus plugins -->
		<link href="resources/plugins/gentelella-master/build/css/custom.min.css" rel="stylesheet">
		<link href="resources/css/adminmain.css" rel="stylesheet">
	</head>

	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<?php include('includes/admin-navigation.php'); ?>

				<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
						<div class="row top_tiles">
							<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-user"></i></div>
									<div class="count">10</div>
									<h3>New Accounts</h3>
								</div>
							</div>
							<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-comment-o"></i></div>
									<div class="count">31</div>
									<h3>New Feedbacks</h3>
								</div>
							</div>
							<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-comments-o"></i></div>
									<div class="count">4</div>
									<h3>New Message</h3>
								</div>
							</div>
							<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-list-alt"></i></div>
									<div class="count">22</div>
									<h3>New Posts</h3>
								</div>
							</div>
						</div>

						<div class="clearfix"></div>

						<div class="row">
							<div class="col-md-12">
								<div class="x_panel">
									<div class="x_content">
										<div class="row">
											
											<div class="profile-main">
												<h1>Welcome <?php echo ucwords(Session::getSession('admin-fname')." ".Session::getSession('admin-lname')); ?>!</h1>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /page content -->

				<!-- footer content -->
				<footer>
					<div class="pull-right">
						&copy; Copyrights | City College of Angeles Alumni Association | All Rights Reserved 2017
					</div>
					<div class="clearfix"></div>
				</footer>
				<!-- /footer content -->
			</div>
		</div>

		<!-- jQuery -->
		<script src="resources/plugins/gentelella-master/vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="resources/plugins/gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="resources/plugins/gentelella-master/vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="resources/plugins/gentelella-master/vendors/nprogress/nprogress.js"></script>
		<!-- bootstrap-wysiwyg -->
		<script src="resources/plugins/gentelella-master/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
		<script src="resources/plugins/gentelella-master/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
		<script src="resources/plugins/gentelella-master/vendors/google-code-prettify/src/prettify.js"></script>

		<!-- Custom Theme Scripts -->
		<script src="resources/plugins/gentelella-master/build/js/custom.min.js"></script>

	</body>
</html>