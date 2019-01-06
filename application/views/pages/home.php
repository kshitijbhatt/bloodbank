<div class="container-fluid">
	<div class="row">
		<div class="jumbo-screen">
			<div class="container h-100 d-flex flex-column flex-wrap justify-content-center align-items-center">
				<div class="row flex-column flex-wrap justify-content-center align-items-center text-center">
					<h1 class="h1 text-danger my-2">We are saving lives!</h1>
					<h4 class="my-2">
						<small class="text-muted">

							Blood is the most precious gift that anyone can give to another person.<br>
							Donating blood not only saves the life also save donor's lives.
						</small>
					</h4>
					<a class="btn btn-danger text-light my-2" href="#joinnow">Join Now</a>
				</div>
			</div>
		</div>
	</div>

<section id="joinnow" class="row bg-home__light">
	<div class="col-12 text-center mb-4">
		<h2 class="position-relative">
		<small class="text-muted section-heading">Join	 Today</small>
		</h2>
	</div>
	<?php require_once(FCPATH.'/application/views/templates/registration.php'); ?>
</section>
<section class="cta-section__red row">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <h2 class="text-light">We are helping people from 40 years</h2>
                        <p class="text-light">
                            You can give blood at any of our blood donation venues all over the world. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.                            
                        </p>
                        
                    </div> <!--  end .col-md-8  -->
                </div> <!--  end .row  -->
            </div>
</section>
<section id="enquirenow" >
	<div class="container">
				
				<div class="d-flex flex-wrap">
					<div class="d-none d-md-inline-block col-6">
					<figure class="appointment-img mb-0 d-flex justify-content-center">
							<img src="<?php echo base_url() ?>/img/appointment.jpg" alt="appointment image">
					</figure>
					</div>
					<div class="d-block d-md-inline-block my-auto col-6">
						<div class="card">
							<div class="card-header bg-danger text-light h4 text-center text-uppercase">
								Looking For Blood Sample?
							</div>
							<div class="card-body">
								<form class="needs-validation m-0" novalidate role="form" method="post" action="<?php echo base_url('enquiry'); ?>">
								
									<fieldset>
										<div class="col-12"><?php echo @$error;?></div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="enquireBloodType">Blood type</label>
														<select class="form-control" id="enquireBloodType" name="enquireBloodType">
															<?php
																$bloodTypeArray = array("A+", "A-","B+","B-","AB+","AB-","O+","O-" );
																
				
																foreach($bloodTypeArray as $bloodTypeValue) { ?>
																<option >
																	<?php echo $bloodTypeValue ?>
																</option>;
																<?php
																}
															?>
														</select>
												</div>
												<div class="form-group col-md-6">
													<label for="enquireLocation">Location</label>
													<select class="form-control" id="enquireLocation" name="enquireLocation">
													<?php 

															$query = $this->db->query("SELECT `user_location` FROM `bb_users` WHERE `user_type` = 'Hospital' GROUP BY `user_location`");

															foreach ($query->result_array() as $location){
													?>
															<option>
																<?php echo $location['user_location'];?>
															</option>
													<?php 
													}		
													?>
													
													</select>
												</div>
												<div class="invalid-feedback">
													Internal Server Error! Please try again.
												</div>
											</div>	
											<div class="text-center">
												<input type="submit" class="btn btn-outline-success mx-auto" name="enquirySubmit" value="Request Sample">
											</div>
								
									</fieldset>
								</form>
							</div>
							
						</div>
					</div>
				</div>
		
	</div>
</section>

</div>
