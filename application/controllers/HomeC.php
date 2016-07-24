<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeC extends CI_Controller {

	// function __construct() 
	// {
	// 	parent::__construct();
	// 	$this->load->database();
	// 	// Load url helper
	// 	$this->load->helper('url');
	// }

	public function index()
	{
		$page['pageTitle'] = "Home";
		$this->load->view('templates/header-on', $page);
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

}
