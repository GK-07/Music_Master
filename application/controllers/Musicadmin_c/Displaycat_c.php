<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaycat_c extends CI_Controller
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
	//function to display category
	public function displaycat()
	{
		$this->load->model("musicadmin_m/Displaycat_m", "am");
		$bdata=$this->am->getcatinfo();
		$k=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/catdis", $k);
		
	}

	//function to load add category
	public function loadaddcat()
	{
		$this->load->view("musicadmin_v/default/addcategory");
	}

	//function to add category to database
	public function addcat()
	{
		$this->load->model("musicadmin_m/Displaycat_m","bm");
        $data=array(
        	"categoryname"=>$this->input->post("txtname") 
        );
		$this->bm->insertcat($data);
		redirect("Musicadmin_c/Displaycat_c/displaycat");
	}
}