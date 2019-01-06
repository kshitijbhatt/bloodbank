<!-- User model page contains the databse functions to add blood samples for hospital -->
<?php
class Addsample_model extends CI_model{

	public function register_sample($hospitalMeta){

		
		
		$this->db->insert('bb_hospital_meta', $hospitalMeta);
		
	}
	
	public function update_sample($hospitalMeta){
		
		$this->db->update('bb_hospital_meta', $hospitalMeta);
		
	}

	
	public function sample_Existing($metaKey){

		$this->db->select('*');
		$this->db->from('bb_hospital_meta');
		$this->db->where('meta_key',$metaKey); 
		$query=$this->db->get();
	  
		if($query->num_rows()>0){
		  return false;
		}else{
		  return true;
		}
	  
	}
	  

}
