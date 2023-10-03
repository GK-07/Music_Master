<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaymood_c extends CI_Controller
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

	//Function to display moods
	public function displaymood()
	{
		//loading model Displaymood_m
		$this->load->model("musicadmin_m/Displaymood_m", "am");
		$bdata=$this->am->getmoodinfo();
		$k=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/mooddis", $k);
		
	}
	//function to load add mood-view
	public function loadaddmood()
	{
		$this->load->view("musicadmin_v/default/addmood");
	}

	//function to add mood to database
	public function addmood()
	{

		$fname=$_FILES['txtphoto']['name'];
		copy($_FILES['txtphoto']['tmp_name'], "C:/xampp/htdocs/music/resources/image/".$fname)or die($_FILES['txtphoto']['error']);

		/*$config['upload_path']='./resources/image/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='1024';
		$config['max_width']='1100';
		$config['max_height']='786';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('txtphoto'))
		{*/
			//$adata=$this->upload->data();
			$this->load->model("musicadmin_m/Displaymood_m","bm");
	        $data=array(
	        	"title"=>$this->input->post("txttitle"),
	        	
	        	"description"=>$this->input->post("txtdescription"),
	        	"image"=>$fname
	        );
		$this->bm->insertmood($data);
		redirect("Musicadmin_c/Displaymood_c/displaymood");
	/*}*/
	}
}
?>