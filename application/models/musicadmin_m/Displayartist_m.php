<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayartist_m extends CI_Model
{
	//function to get artist info
	public function getartistinfo()
	{
		return $this->db->get('tblartist')->result();
	}

	//function to insert artist
	public function insertartist($data)
	{
		$this->db->insert("tblartist",$data);
	}

	//functio to get artist songs
	public function getartistsong($id)
	{
		$this->db->from("tblartist a");
		$this->db->join("tblsongartist sa", "sa.artistid=a.artistid");
		$this->db->join("tblsong s","s.songid = sa.songid");
		$this->db->where("sa.artistid", $id);
		$this->db->select("a.*,a.description as ades,sa.*,s.*,s.description as sdes");
		return $this->db->get()->result();
	}

	//function to get artist more info
	public function getmoreinfo($id)
	{
		$this->db->where("artistid",$id);
		return $this->db->get("tblartist")->result()[0];
	}

}