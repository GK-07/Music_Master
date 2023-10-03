<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	//Calling constructor
	public function __construct()
	{
		//checking wether the user has logged in, if session is not set then we redirect him/her to login pag
		parent::__construct();
		if (isset($_SESSION['uid'])) 
		{
			redirect("Musicadmin_c/Displayadm_c/displayad");
		}
	}
	public function index()
	{
		//calling login view-page
		$this->load->view('musicadmin_v/default/login');
	}
}
?>