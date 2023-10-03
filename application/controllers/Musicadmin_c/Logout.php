<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{
	//function to logout user
	public function index()
	{
		//destroying the session
		session_destroy();
		$this->load->view('musicadmin_v/default/login');
	}
}
?>