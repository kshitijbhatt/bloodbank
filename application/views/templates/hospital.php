<?php 
// Restrict access to only registered users
$user_id=$this->session->userdata('user_id');
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
?>

<?php 
}
?>
