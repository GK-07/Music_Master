<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayadm_m extends CI_Model
{
	//function to get Admin info
	public  function getadmininfo()
	{
		return $this->db->get('tbladmin')->result();
	}

	//function to insert admin
	public function insertadmin($data)
	{
		$this->db->insert("tbladmin",$data);

	}
	
}