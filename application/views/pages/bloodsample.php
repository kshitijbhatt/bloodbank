
<div class="container-fluid my-4">
	<div class="row">
		<div class="col-12">
			<div class="text-center my-3">
				<h3>
					List of available blood samples
				</h3>
			</div>
			<table class="table table-bordered my-3">
				<thead>
				<tr>
					
					<th scope="col"></th>
					<th scope="col">Blood Group</th>
					<th scope="col">Location</th>
					<th scope="col">Available At</th>
					<th scope="col">No. Of Samples Available</th>
					<th scope="col">Request Sample</th>
				</tr>
				</thead>
				<tbody>
				<?php  
					$i=1;
         			foreach ($h->result() as $row)  
         				{  
          	    ?><tr> 
				<th scope="row"><?php echo $i; ?></th>	   
				<td><?php echo $row->meta_key;?></td>  
				<td><?php echo $row->user_location;?></td>  
				<td><?php echo $row->display_name;?></td> 
				<td><?php echo $row->meta_value;?></td> 
				<?php 
					$user_type=$this->session->userdata('user_type');
					if($user_type == 'Receiver'){
				?>
				<td><a href="<?php echo base_url('enquiry/user_enquiry'); ?>" class="btn btn-outline-success">Request Sample</a> </td>

				</tr>  
				<?php  } else { ?>
				
				<td><a href="<?php echo base_url('login'); ?>" class="btn btn-outline-success">Login to request sample</a></td>

				<?php } $i++;}  
				?>  
				</tbody>
			</table>

		</div>
	</div>
</div>
