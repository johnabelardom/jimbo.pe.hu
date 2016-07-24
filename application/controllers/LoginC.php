<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginC extends CI_Controller {

/*	function __construct() 
	{
		parent::__construct();
		$this->load->database();
		// Load url helper
		$this->load->helper('url');
	}*/

	public function index(){
		$page['pageTitle'] = "Login to Jimbo";
		$this->load->view('templates/header-off', $page);
		$this->load->view('login');
		$this->load->view('templates/footer');
	}

	public function checkLogin() {
		$this->load->helper('form');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_verifyUser');

		if($this->form_validation->run() == false){
			// $page['pageTitle'] = "Login to Jimbo";
			// $this->load->view('templates/header-off', $page);
			// $this->load->view('login');
			// $this->load->view('templates/footer');
			redirect('LoginC');
		}
		else {
			redirect('HomeC');
		}
	}

	public function verifyUser() {
		$uname = $this->input->post('username');
		$pword = md5($this->input->post('password'));

		$this->load->model('AccessModel');

		if($this->AccessModel->login($uname, $pword)){
			return true;
		}
		else {
			$this->form_validation->set_message('verifyUser', 'Incorrect Username or Password. Please try again.');
			return false;
		}
	}

}
