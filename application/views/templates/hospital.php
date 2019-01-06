<?php 
// Restrict access to only registered users
$user_id=$this->session->userdata('user_id');
$user_type=$this->session->userdata('user_type');
$hospital_name=$this->session->userdata('display_name');
if(!$user_id){
?>

<div class="container-fluid">
	<div class="row justify-content-center align-items-center h-100">
		<div class="col-12 text-center">
			<h3>
				<small class="errorLogin">Restricted area, you need to login to view this content</small>
			</h3>

		</div>
		
	</div>
</div>

<?php 

}

else {
	if(!$user_type == 'Hospital'){ ?>

		
<div class="container-fluid">
	<div class="row justify-content-center align-items-center h-100">
		<div class="col-12 text-center">
			<h3>
				<small class="errorLogin">Restricted area, you need to login to view this content</small>
			</h3>

		</div>
		
	</div>
</div>
<?php 
	} else {	
?>

<div class="container-fluid my-4">

<div class="row">
	<div class="col-12 my-2">
		<h3>Welcome <?php echo $hospital_name ?></h3>
	</div>

</div>


	<div class="row">


			
		
					<div class="col-lg-4 col-12 my-2">
						<div class="card">
							<div class="card-header">
								<h3>
									<small>Update Available Sample</small>
								</h3>
							</div>
							<div class="card-body">
								<form  class="needs-validation m-0" novalidate role="form" method="post" action="<?php echo base_url('user/hospital_meta'); ?>">
									<div class="row">
										<div class="col">
											<select class="form-control" name="metaKey">
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
										<div class="col">
											<input type="number" class="form-control" placeholder="" min="1" name="metaValue">
										</div>
										<div class="col">
											<input type="hidden" value="<?php echo $user_id?>" name="hospitalID">
											<input type="submit" class="btn btn-danger rounded w-100">
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>
					
					<div class="col-lg-8 col-12 my-2">
						<div class="card">
							<div class="card-header">
							<h3>
									<small>Current Requests</small>
							</h3>
							</div>
							<div class="card-body">
								<table class="table table-bordered">
										<thead>
											<tr>
											<th scope="col"> </th>
											<th scope="col">Full Name</th>
											<th scope="col">Email ID</th>
											<th scope="col">Phone Number</th>
											<th scope="col">Blood Type Requested</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											<th scope="row"></th>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											</tr>
	
										</tbody>
								</table>
							</div>
			
	
					
						</div>

					</div>
		
	</div>
</div>
<?php 
	}
}
?>
