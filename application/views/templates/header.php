<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap-theme.min.css');?>">
	<style>
		body{
			padding-top: 65px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
				aria-expanded="false" aria-controls="nabar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Quiz Tutorial</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<?php if($this->session->userdata('userdetails')): ?>
						<li><a href="<?php echo base_url("admin/subject"); ?>">Subjects</a></li>
						<li><a href="<?php echo base_url("admin/question"); ?>">Questions</a></li>
						<li><a href="<?php echo base_url("admin/logout"); ?>">Logout</a></li>
					<?php endif; ?>	
				</ul>
			</div>
		</div>
	</nav>	
<div class="container">