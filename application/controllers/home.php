<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class home extends CI_Controller
	{
		//function to load home home page
		public function index()
		{
			$this->load->model("homeM","h");
			$ls=$this->h->getmostlikesong();
			$rs=$this->h->getrecentaddsong();
			$ra=$this->h->getrecentaddalbum();
			$raa=$this->h->getrecentaddartist();
			$t=array("ls"=>$ls,"rs"=>$rs,"ra"=>$ra,"raa"=>$raa);
			$this->load->view("index",$t);
		}
	}
?>