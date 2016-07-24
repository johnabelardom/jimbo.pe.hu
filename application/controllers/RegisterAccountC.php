<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterAccountC extends CI_Controller {

	// function __construct() 
	// {
	// 	parent::__construct();
	// 	$this->load->database();
	// 	// Load url helper
	// 	$this->load->helper('url');
	// }

	public function index()
	{
		$page['pageTitle'] = "Register Account";
		$this->load->view('templates/header-off', $page);
		$this->load->view('register');
		$this->load->view('templates/footer');
	}

	public function checkInputs() {
		$this->load->helper('form');

		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('email', 'E-mail', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_Register');

		if($this->form_validation->run() == false){
			redirect('RegisterAccountC');
		}
		else {
			redirect('HomeC');
		}
	}

	public function Register(){
		$date = array(
			'uname' => $this->input->post('username'),
			'pword' => md5($this->input->post('password')),
			'fname' => $this->input->post('firstname'),
			'lname' => $this->input->post('lastname'),
			'email' => $this->input->post('email')
		);

		$this->load->model('AccessModel');

		$this->AccessModel->insertRegisterAcc($date);
		$data['pageTitle'] = 'Data Inserted Successfully';
		$this->load->view('templates/header-off', $data);
		$this->load->view('register');
		$this->load->view('templates/footer');
		// if($this->LoginModel->insertRegisterAcc($data)){
		// 	return true;
		// }
		// else {
		// 	$this->form_validation->set_message('Register', "Can't register account.");
		// 	return false;
		// }
	}
}
