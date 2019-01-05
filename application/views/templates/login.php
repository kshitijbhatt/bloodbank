<section class="container-fluid my-auto">
	<div class="row h-100 flex-column justify-content-center align-items-center bg-light">
		  
		  <?php
			$error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
          ?>
		  
		  <figure class="d-flex justify-content-center align-items-center mb-2">
									<img src="<?php echo base_url() ?>/img/blood-sample.svg" alt="Login image" class="border border-danger rounded-circle p-2">
									
          </figure>
					<div class="card shadow-sm">
						<div class="card-body">
							<form class="needs-validation" novalidate role="form" method="post" action="<?php echo base_url('user/login_user');?>">
								<div class="form-group">
									<label for="InputEmail1">Email address</label>
									<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="user_email" required>
									
									<div class="invalid-feedback">
									User name is required!
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="user_password" required>
									<div class="invalid-feedback">
									Password is required!
									</div>
								</div>
								
								<button type="submit" class="btn btn-danger rounded w-100">Submit</button>
							</form>
						</div>
					</div>

	</div>	
				</section>
			</div>
