<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class UserC extends CI_Controller
	{
		//function to load albums page
		public function index()
		{
			redirect("AlbumC");
		}
	}
?>