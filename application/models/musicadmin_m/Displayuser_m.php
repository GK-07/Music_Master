<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayuser_m extends CI_Model
{

	//function to get user info
	public function getuserinfo()
	{
		return $this->db->get('tbluser')->result();
	}

	//function to block/unblock user
	public function blockunblock_m($id, $status)
	{
		$this->db->set("status",$status);
		$this->db->where("userid",$id);
		$this->db->update("tbluser");
	}

	//function to insert user
	public function insertuser($data)
	{
		$this->db->insert("tbluser",$data);
	}
}