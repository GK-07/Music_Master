<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaymood_m extends CI_Model
{
	//function to get all moods from the database
	public function getmoodinfo()
	{
		return $this->db->get('tblmood')->result();
	}

	//function to insert mood
	public function insertmood($data)
	{
		$this->db->insert("tblmood",$data);
	}
}