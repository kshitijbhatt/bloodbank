<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class User extends CI_Controller {

public function __construct(){

	parent::__construct();
	
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->library('session');

}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/home');
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
			redirect(base_url());
			
		}
		else{
			$this->session->set_flashdata('error_msg', '<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Oh snap!</strong> The email id is already registered </div>.');
			redirect('user');		
		}
   
	}
	public function login_view(){
		
		$this->load->view('templates/header');
		$this->load->view('templates/login.php');
		$this->load->view('templates/footer');
		 
	}

	function login_user(){
		$user_login=array(
		
			'user_email'=>$this->input->post('user_email'),
			'user_password'=>md5($this->input->post('user_password'))
		
		);
	
			$data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
				if($data)
				{
					$this->session->set_userdata('user_id',$data['id']);
					$this->session->set_userdata('user_email',$data['email']);
					$this->session->set_userdata('user_name',$data['user_login']);
					$this->session->set_userdata('display_name',$data['display_name']);
					$this->session->set_userdata('user_type',$data['user_type']);
	
					$this->load->view('user_profile.php');
	
				}
				else{
					$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
					$this->load->view("login.php");
	
				}
	
	
	}

	function user_profile(){
		$this->load->view('templates/header');
		$this->load->view('user_profile.php');
		$this->load->view('templates/footer');
		 
	}
	public function user_logout(){
 
		$this->session->sess_destroy();
		redirect('user/login_view', 'refresh');
	}
	
}

?>
