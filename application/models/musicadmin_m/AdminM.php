<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminM extends CI_Model
{
	//function to login
	public function login($cond)
	{
		$this->db->where($cond);
		$x=$this->db->get("tbladmin");
		if($x->num_rows()>0)
			return $x->result()[0];
		else
			return false;
	}
}
?>