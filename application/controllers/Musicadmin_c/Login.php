<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	//function to load login page
	public function index()
	{
			$this->load->view('musicadmin_v/default/login');
	}
	//to validate login
	public function doLogin()
	{
		//function to load model adminM
		$this->load->model("musicadmin_m/AdminM","am");
		$cond=array(
			"username"=>$this->input->post("txtuname"),
			"password"=>$this->input->post("txtpwd")
		);
		$u=$this->am->login($cond);
		if($u==false)
		{
			$error=array(
				"errormsg"=>"invalid username and password", 
				"errortype"=>"login error"
			);
			$this->load->view('musicadmin_v/default/login', $error);
		}
		else
		{
			$_SESSION['uname']=$u->username;
			$_SESSION['uid']=$u->adminid;
			$_SESSION['propic']=$u->profilepic;
			redirect("Musicadmin_c/Displayadm_c/displayad");
		}
	}
}
?>