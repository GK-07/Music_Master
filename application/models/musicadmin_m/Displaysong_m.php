<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaysong_m extends CI_Model
{
	//functio to get song info
	public function getsonginfo()
	{
		return $this->db->get('tblsong')->result();
	}

	//functio to block/unblock song
	public function blockunblock_m($id, $status)
	{
		$this->db->set("status",$status);
		$this->db->where("songid",$id);
		$this->db->update("tblsong");
	}

	//function to insert songs
	public function insertsong($data)
	{
		$this->db->insert("tblsong",$data);
	}

	//function to insert artist
	public function insertsongartist($data)
	{
		$this->db->insert("tblsongartist",$data);
	}
	//function to get all albums
	public function getallalbum()
	{
		return $this->db->get("tblalbum")->result();
	}	

	//function to get all categories
	public function getallcategory()
	{
		return $this->db->get("tblcategory")->result();
	}

	//function to ger all the artists
	public function getallartist()
	{
		return $this->db->get("tblartist")->result();
	}
}