<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class Enquiry extends CI_Controller {

public function __construct(){

	parent::__construct();
	
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->model('addsample_model');
		$this->load->model('enquiry_model');
		$this->load->library('session','form_validation','table');
}

public function index()
{

	//load the database  
	$this->load->database();  
	//load the model   
	//load the method of model  
	$data['h']=$this->enquiry_model->selectAndJoin();  
	//return the data in view  
	$this->load->view('templates/header');
	$this->load->view('pages/bloodsample', $data);
	$this->load->view('templates/footer');
 

	
}

public function user_Enquiry()
{

	
	$user_id=$this->session->userdata('user_id');
	$user_type=$this->session->userdata('user_type');

	if(!$user_id){
		redirect('login');
	} else {
		if(!$user_type == 'Receiver'){
		echo'
		<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		strong>Oh snap!</strong> Only receiver can request for blood sample</div>';
		} else {
		
			//@TODO -- the request functionality will come here
			

		}









	}

}

}
