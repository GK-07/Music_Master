<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Displayartist_c extends CI_Controller
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
	//function to display artist
	public function displayartist()
	{
		//loading model Displayartist_m
		$this->load->model("musicadmin_m/Displayartist_m", "am");
		$bdata=$this->am->getartistinfo();
		$k=array(
			"bdata"=>$bdata
		);
		//loading view of displaying artist
		$this->load->view("musicadmin_v/default/artistdis", $k);
		
	}
	//function to load artist
	public function loadaddartist()
	{
		$this->load->view("musicadmin_v/default/addartist");
	}
	//function to add artist to database
	public function addartist()
	{
		$this->load->model("musicadmin_m/Displayartist_m","bm");

			$fname=$_FILES['txtphoto']['name'];
			copy($_FILES['txtphoto']['tmp_name'], "C:/xampp/htdocs/music/resources/image/".$fname)or die($_FILES['txtphoto']['error']);

        $data=array(
        	"name"=>$this->input->post("txtname"),
        	"photo"=>$fname, 
        	"description"=>$this->input->post("txtdescription") 
        );

		$this->bm->insertartist($data);
		
/*		echo "<pre>";
		print_r($data);
		
		echo "</pre>";*/

		redirect("Musicadmin_c/Displayartist_c/displayartist");
	}
	//function to view artist more info
	public function moreinfo($id)
	{
		$this->load->model("musicadmin_m/Displayartist_m", "am");
		$bdata=$this->am->getartistsong($id);
		$g=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/artistmoreinfo",$g);
	}
}