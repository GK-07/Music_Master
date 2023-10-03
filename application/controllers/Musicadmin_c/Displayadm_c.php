<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayadm_c extends CI_Controller
{
	//Calling constructor
	public function __construct()
	{
		//checking wether the user has logged in, if session is not set then we redirect him/her to login pag
		parent::__construct();
		if (!isset($_SESSION['uid'])) 
		{
			redirect("Musicadmin_c/Admin");
		}
	}

	//This function calls the display admin view
	public function displayad()
	{
		//Creating the object of Displayadm_m class
		$this->load->model("musicadmin_m/Displayadm_m", "am");
		//function displaying the information of admins
		$bdata=$this->am->getadmininfo();
		$g=array(
			"bdata"=>$bdata
		);
		//callig the display admin view
		$this->load->view("musicadmin_v/default/admindis", $g);
	}

	//function to call add admin view 
	public function loadaddadmin()
	{
		$this->load->view("musicadmin_v/default/addadmin");
	}
	//function to add admin
	public function addadmin()
	{
		$fname=$_FILES['txtphoto']['name'];
		copy($_FILES['txtphoto']['tmp_name'], "C:/xampp/htdocs/music/resources/image/".$fname)or die($_FILES['txtphoto']['error']);


		/*$config['upload_path']='./resources/image/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='1024';
		$config['max_width']='1100';
		$config['max_height']='786';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('txtpropic'))
		{
			$adata=$this->upload->data();*/
		$this->load->model("musicadmin_m/Displayadm_m","bm");
        $data=array(
        	"name"=>$this->input->post("txtname"),
        	"username"=>$this->input->post("txtuname"),
        	"password"=>$this->input->post("txtpwd"),
        	"email"=>$this->input->post("txtemail"), 
        	"profilepic"=>$fname 
        );
		$this->bm->insertadmin($data);
		redirect("Musicadmin_c/Displayadm_c/displayad");
	/*}*/
}
}