<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaycat_m extends CI_Model
{
	//function to get all categories
	public function getcatinfo()
	{
		return $this->db->get('tblcategory')->result();
	}

	//function to insert category
	public function insertcat($data)
	{
		$this->db->insert("tblcategory",$data);
	}
}