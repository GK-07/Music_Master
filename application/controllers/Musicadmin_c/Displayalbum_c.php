<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayalbum_c extends CI_Controller
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
	//function to display all albums
	public function displayalbum()
	{
		//loading model Displayalbum_m
		$this->load->model("musicadmin_m/Displayalbum_m", "am");
		$bdata=$this->am->getalbuminfo();
		$k=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/albumdis", $k);
		
	}

	//function to block and unblock user
	public function blockunblock_c($id,$status)
	{
		//loading model Displayalbum_m
		$this->load->model("musicadmin_m/Displayalbum_m", "am");
		if($status==0)
		{
			$status=1;
		}
		else
		{
			$status=0;
		}
		$this->am->blockunblock_m($id, $status);
		redirect("Musicadmin_c/Displayalbum_c/displayalbum");
	}

	//function to load add albums-views
	public function loadaddalbum()
	{
		$this->load->view("musicadmin_v/default/addalbum");
	}

	//function to add albums
	public function addalbum()
	{
		//loading model Displayalbum_m
		$this->load->model("musicadmin_m/Displayalbum_m","bm");
        $data=array(
        	"name"=>$this->input->post("txtname"),
        	"type"=>$this->input->post("txttype"),
        	"releasedt"=>$this->input->post("txtreleasedt"),
        	"status"=>$this->input->post("txtstatus"), 
        	"description"=>$this->input->post("txtdescription") 
        );
		$this->bm->insertalbum($data);
		redirect("Musicadmin_c/Displayalbum_c/displayalbum");
	}

	//function to view more info of albums
	public function albummoreinfo($id)
	{
		$this->load->model("musicadmin_m/Displayalbum_m", "am");
		$bdata=$this->am->getalbum($id);
		$g=array(
			"bdata"=>$bdata
		);
		//loading album views
		$this->load->view("musicadmin_v/default/albummoreinfo",$g);
	}
}