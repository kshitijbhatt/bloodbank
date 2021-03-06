
<div class="container py-5">
	<div class="row card-deck">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-header">
					<h4>Receivers</h4>
				</div>
				<div class="card-body">
					<h5 class="card-title">Need blood in emergency?</h5>
					<p class="card-text">With your support we can save many lives, register today and help us grow the blood bank.</p>
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalReceiverRegistration">
 					 	Register Now
					</button>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="card text-white bg-danger">
			<div class="card-header">
					<h4>Hospitals</h4>
				</div>
				<div class="card-body">
					<h5 class="card-title">List your inventory</h5>
					<p class="card-text">With your support we can create a global list of available blood samples.</p>
					<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalHospitalRegistration">
 					 	Register Now
					</button>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalReceiverRegistration" tabindex="-1" role="dialog" aria-labelledby="modalReceiverRegistration" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Register Today</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="row">
			<div class="col-12 my-auto">
			
			</div>
			<div class="col-12">
			<?php
			$error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
            ?>
			<form class="needs-validation m-0" novalidate role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
				
			<fieldset>
			<div class="col-12"><?php echo @$error;?></div>
			<div class="form-row">
			<div class="form-group col-12">
			<label for="fullReceiverName">Full Name</label>
			<input type="text" class="form-control" id="fullReceiverName" placeholder="Use space to seperate first and last name" name="fullName" required>
			<div class="invalid-feedback">
          		Please enter correct name
        	</div>
			</div>
			<div class="form-group col-md-6">
			<label for="inputReceiverEmail">Email</label>
			<input type="email" class="form-control" id="inputReceiverEmail" placeholder="" name="email" required>
			<div class="invalid-feedback">
          		Please provide an email id
        	</div>
			</div>
			<div class="form-group col-md-6">
			<label for="inputReceiverPassword">Password</label>
			<input type="password" class="form-control" id="inputReceiverPassword" placeholder="" name="password" required>
			<div class="invalid-feedback">
          		Your password is important, please make sure its unique and strong
        	</div>
			</div>
			</div>
			<div class="form-row">
			<div class="form-group col-md-6">
			<label for="inputPhoneNumberHospital">Phone Number</label>
			<input type="text" class="form-control" id="inputPhoneNumberHospital" placeholder="" name="phoneNumber" required>
			<div class="invalid-feedback">
          		Please enter correct phone number
        	</div>
			</div>
			<div class="form-group col-md-6">
			<label for="inputBloodType">Blood type</label>
			<select class="form-control" id="inputBloodType" name="bloodType">
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
			<div class="form-group col-12 col-md">
			<input type="hidden" class="form-control" id="inputHiddenLocation" placeholder="" name="userLocation" value="Online" required>
			<input type="hidden" class="form-control" id="inputHiddenTypeReceiver" placeholder="" name="userType" value="Receiver" required>
			<div class="invalid-feedback">
          		Internal Server Error! Please try again.
        	</div>
			</div>	
			
			<div class="modal-footer w-100">
       		 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			 <input type="submit" class="btn btn-primary" name="register" value="Register">
     		</div>
			
			</fieldset>
			</form>
			</div>
		</div>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="modalHospitalRegistration" tabindex="-1" role="dialog" aria-labelledby="modalHospitalRegistration" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Register Today</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="row">
			<div class="col-12 my-auto">
			
			</div>
			<div class="col-12">
			<?php
			$error_msg=$this->session->flashdata('error_msg');
			$success_msg=$this->session->flashdata('success_msg');
			
                  if($error_msg){
                    echo $error_msg;
									}
									if($success_msg){
										echo $success_msg;
									}
            ?>
			<form class="needs-validation m-0" novalidate role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
				
			<fieldset>
			<div class="col-12"><?php echo @$error;?></div>
			<div class="form-row">
			<div class="form-group col-12">
			<label for="fullHospitalName">Hospital Name</label>
			<input type="text" class="form-control" id="fullHospitalName" placeholder="Enter hospital name" name="fullName" required>
			<div class="invalid-feedback">
          		Please enter correct name
        	</div>
			</div>
			<div class="form-group col-md-6">
			<label for="inputHospitalEmail">Email</label>
			<input type="email" class="form-control" id="inputHospitalEmail" placeholder="" name="email" required>
			<div class="invalid-feedback">
          		Please provide an email id
        	</div>
			</div>
			<div class="form-group col-md-6">
			<label for="inputHospitalPassword">Password</label>
			<input type="password" class="form-control" id="inputHospitalPassword" placeholder="" name="password" required>
			<div class="invalid-feedback">
          		Your password is important, please make sure its unique and strong
        	</div>
			</div>
			</div>
			<div class="form-row">
			<div class="form-group col-md-6">
			<label for="inputPhoneNumberReceiver">Phone Number</label>
			<input type="text" class="form-control" id="inputPhoneNumberReceiver" placeholder="" name="phoneNumber" required>
			<div class="invalid-feedback">
          		Please enter correct phone number
        	</div>
			</div>
			<div class="form-group col-md-6">
			<label for="inputLocation">Location</label>
			<select class="form-control" id="inputLocation" name="userLocation">
			<option>Delhi</option>
			<option>Mumbai</option>
			<option>Pune</option>
			<option>Gurugram</option>
			<option>Jaipur</option>
			<option>Chennai</option>
			<option>Hydrabad</option>
			<option>Chennai</option>
			</select>
			</div>
			<div class="form-group col-12 col-md">
			<input type="hidden" class="form-control" id="inputHiddenBloodType" placeholder="" name="bloodType" value="N/A" required>
			<input type="hidden" class="form-control" id="inputHiddenTypeHospital" placeholder="" name="userType" value="Hospital" required>
			<div class="invalid-feedback">
          		Internal Server Error! Please try again.
        	</div>
			
			<div class="modal-footer w-100">
       		 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			 <input type="submit" class="btn btn-primary" name="register" value="Register">
     		</div>
			
			</fieldset>
			</form>
			</div>
		</div>
      </div>

    </div>
  </div>
</div>


<div class="container my-auto">
    	
	</div>

