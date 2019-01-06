<!-- User model page contains the databse functions to enquire blood samples for hospital -->
<?php
class Enquiry_model extends CI_model{

	function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function selectAndJoin()  
      {  
		 //data is retrive from this query  
		 $this->db->select('*');
		 $this->db->from('bb_users');
		 $this->db->join('bb_hospital_meta','bb_users.ID=bb_hospital_meta.hospital_id','inner');
		 
         $query = $this->db->get();  
         return $query;  
      }  	
}
