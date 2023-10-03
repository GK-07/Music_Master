<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayalbum_m extends CI_Model
{
	//function to get album info
	public function getalbuminfo()
	{
		return $this->db->get('tblalbum')->result();
	}

	//function to block unblock album
	public function blockunblock_m($id, $status)
	{
		$this->db->set("status",$status);
		$this->db->where("albumid",$id);
		$this->db->update("tblalbum");
	}
	
	//function to insert album
	public function insertalbum($data)
	{
		$this->db->insert("tblalbum",$data);
	}

	//function to get album info
	public function getalbum($id)
	{
		$this->db->from("tblsong s");
		$this->db->join("tblalbum a", "s.albumid=a.albumid");

		$this->db->where("s.albumid", $id);
		$this->db->select("a.*,a.description as ades,s.*,s.*,s.description as sdes");
		return $this->db->get()->result();
	}

	//function to get album more info
	public function getalbummoreinfo($id)
	{
		$this->db->where("albumid",$id);
		return $this->db->get("tblalbum")->result()[0];
	}
}