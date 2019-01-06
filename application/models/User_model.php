<!-- User model page contains the databse functions and email checker -->
<?php
class User_model extends CI_model{



public function register_user($user){


$this->db->insert('bb_users', $user);

}

public function login_user($email,$pass){

  $this->db->select('*');
  $this->db->from('bb_users');
  $this->db->where('user_email',$email);
  $this->db->where('user_pass',$pass);
  

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function email_check($email){

  $this->db->select('*');
  $this->db->from('bb_users');
  $this->db->where('user_email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}

}


?>
