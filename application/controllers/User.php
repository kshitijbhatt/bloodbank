<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class User extends CI_Controller {

public function __construct(){

	parent::__construct();
	
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->model('addsample_model');
		$this->load->library('session','form_validation');

}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/registration');
		$this->load->view('templates/footer');
		
	}

	public function register_user(){

		$user=array(
			'user_pass'=>md5($this->input->post('password')),
			'user_email'=>$this->input->post('email'),
			'blood_type'=>$this->input->post('bloodType'),
			'display_name'=>$this->input->post('fullName'),
			'user_phone'=>$this->input->post('phoneNumber'),			
			'user_location'=>$this->input->post('userLocation'),
			'user_type'=>$this->input->post('userType'),
		);
		
		print_r($user);
		

		$email_check=$this->user_model->email_check($user['user_email']);
		
		if($email_check){
			$this->user_model->register_user($user);
			$this->session->set_flashdata('success_msg', '<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Well done!</strong> You successfully registered </div>');
			redirect('login');
			
		}
		else{
			$this->session->set_flashdata('error_msg', '<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Oh snap!</strong> The email id is already registered </div>.');
			redirect('registration');		
		}
	
   
	}
	public function login(){
		
		$this->load->view('templates/header');
		$this->load->view('templates/login');
		$this->load->view('templates/footer');
		 
	}

	function login_user(){
		$user_login=array(
		
			'user_email'=>$this->input->post('user_email'),
			'user_pass'=>md5($this->input->post('user_password'))
		
		);
	
			$data=$this->user_model->login_user($user_login['user_email'],$user_login['user_pass']);
				if($data)
				{
					$this->session->set_userdata('user_id',$data['ID']);
					$this->session->set_userdata('user_email',$data['user_email']);
					$this->session->set_userdata('blood_type',$data['blood_type']);
					$this->session->set_userdata('display_name',$data['display_name']);
					$this->session->set_userdata('user_phone',$data['user_phone']);
					$this->session->set_userdata('user_location',$data['display_name']);
					$this->session->set_userdata('user_type',$data['user_type']);
					
					redirect('profile','refresh');
					
				}
				else{
					$this->session->set_flashdata('error_msg', '<div class="alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Oh snap!</strong> Incorrect email or password</div>.');
					redirect('login');
	
				}
	
	
	}

	public function user_profile(){
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_type');

		if($user_type == "Receiver"){
			$this->load->view('templates/header');
			$this->load->view('templates/receiver');
			$this->load->view('templates/footer');
		} elseif ($user_type == "Hospital") {
			
			$this->load->view('templates/header');
			$this->load->view('templates/hospital');
			$this->load->view('templates/footer');
			# code...
		} else {
			redirect(base_url());
		}
		 
	}
	
	public function user_logout(){
 
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}

	public function hospital_meta(){
		$hospitalMeta=array(
			'hospital_id'=>$this->input->post('hospitalID'),
			'meta_key'=>$this->input->post('metaKey'),			
			'meta_value'=>$this->input->post('metaValue')
		);

		// $hospitalMetaKey = $this->input->post('metaKey');
		// $hospitalMetaValue = $this->input->post('metaValue');
		print_r($hospitalMeta);

		$sample_check=$this->addsample_model->sample_Existing($hospitalMeta['meta_key']);

		if($sample_check){

			$this->addsample_model->register_sample($hospitalMeta);
			redirect('profile');
			
		} 
		else{

			$this->addsample_model->update_sample($hospitalMeta);
			redirect('profile');
		}
		

	}
	
}

?>
