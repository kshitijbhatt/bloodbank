<html>
	<head>
		<title>
			Blood Bank
		</title>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light header header--fixed hide-from-print">
	<a class="navbar-brand" href="<?php echo base_url(); ?>">
	<img class="mb-2" src="<?php echo base_url() ?>/img/blood-sample.svg" alt="Logo Goes Here" width="50" height="50">
	Blood Bank
	</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>
		<div class="collapse navbar-collapse" id="navbarColor03">
				<ul class="navbar-nav ml-auto">
					<?php ?>
					<li class="nav-item">
					<?php 
					$user_id=$this->session->userdata('user_id');
					if(!$user_id){
						echo '<a class="nav-link btn btn-outline-primary px-4 mr-2 btn-lg" href="'.base_url().'user/login">Login</a>';
					}
					else{
						echo '<a class="nav-link btn btn-outline-primary px-4 mr-2 btn-lg" href=" ">Logout</a>';
					}?>	
					</li>
					<li class="nav-item">
					<a class="nav-link btn btn-outline-success px-4 mr-4 btn-lg" href="<?php echo base_url()?>user"> Register</a>
					</li>
				</ul>
		</div>
	</nav>
