<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccessModel extends CI_Model {

	// function __construct() 
	// {
	// 	parent::__construct();

	// 	// Load url helper
	// 	$this->load->helper('url');
	// }

	// public function getUser($uname, $pword)
	// {
	// 	//$this->db->select('username,password');
	// 	//$query = $this->db->get_where('tbl_users', array('username' => $uname, 'password' => $pword));
	// 	$query = $this->db->get_where('tbl_users', array('username' => $uname . ' AND ' . "password = '$pword'"));
	// 	return $query->result();
	// }

	public function login($uname, $pword) {
		$this->db->select('username','password');
		$this->db->from('tbl_users');
		$this->db->where('username', $uname);
		$this->db->where('password', $pword);

		$query = $this->db->get();

		if($query->num_rows() == 1){
			return true;
		}
		else {
			return false;
		}

	}

	public function insertRegisterAcc($data) {
		$this->db->set('username', $data['uname']);
		$this->db->set('password', $data['pword']);
		$this->db->set('fname', $data['fname']);
		$this->db->set('lname', $data['lname']);
		$this->db->set('email', $data['email']);

		$this->db->insert('tbl_users');
	}
}
