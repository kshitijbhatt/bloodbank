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
								<form class="needs-validation m-0" novalidate role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
								
									<fieldset>
										<div class="col-12"><?php echo @$error;?></div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="enquireBloodType">Blood type</label>
													<select class="form-control" id="enquireBloodType" name="enquireBloodType">
													<option>A+</option>
													<option>A-</option>
													<option>B+</option>
													<option>B-</option>
													<option>AB+</option>
													<option>AB-</option>
													<option>O+</option>
													<option>O-</option>
													</select>
												</div>
												<div class="form-group col-md-6">
													<label for="enquireLocation">Location</label>
													<select class="form-control" id="enquireLocation" name="enquireLocation">
													<option>Delhi</option>
													<option>Gurugram</option>
													<option>Chennai</option>
													<option>Hakuna Matata</option>
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
