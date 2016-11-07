<!DOCTYPE html>
<html lang="en">
        <head>
                <title>AMEA GT Equipment Loan</title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				
				<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css'); ?>">
				<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
				<script src="<?php echo base_url('assets/js/moment.min.js');?>"></script>
								
				<script src="<?php echo base_url('assets/js/daterangepicker.js');?>"></script>
				<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/daterangepicker.css'); ?>">
        </head>
        <body>
			<div class="container-fluid bg-1 text-center">
                <h3><img src="/img/GT-logo.jpg" class="img-circle" alt="GT Logo">AMEA GT Equipment Loans</h3>
			</div>
			
			 <nav class="navbar navbar-default">
			  <div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a><span class="navbar-brand">Welcome, <?php isset($_SESSION['username'])?$_SESSION['username']:null ?></span>
				</div>
				
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="/loans/newloan">New Loan</a></li>					
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/loans/returned">Returned Items</a></li>							
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/equipments">Equipment Type</a></li>
							<li><a href="/app_users">Users Management</a></li>							
						</ul>
					</li>
					<li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
				  </ul>
				
			  </div>
			</nav>
			