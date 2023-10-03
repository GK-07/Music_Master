<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class songsM extends CI_Model
{	
	//function to get searched songs
	public function getresult($data)
	{
		$this->db->where($data);
		return $this->db->get("tblsong")->result();
	}

	//function to get all songs
	public function getsongs()
	{
		return $this->db->get("tblsong")->result();
	}

	//function to get most liked song
	public function getmostlikesong()
	{
		$this->db->from("tblsong s");
		$this->db->join("tblsonglikes l","s.songid=l.songid");
		$this->db->select("s.*,count('*') AS 'total_like'");
		$this->db->group_by("s.songid");
		$this->db->order_by("total_like","DESC");
		$this->db->limit(10);
		return $this->db->get()->result();
	}

	//function to get recently added song
	public function getrecentaddsong()
	{
		$this->db->order_by("songid","DESC");
		$this->db->limit(10);
		return $this->db->get("tblsong")->result();
	}

	//function to get recetly added album
	public function getrecentaddalbum()
	{
		$this->db->order_by("albumid","DESC");
		$this->db->limit(5);
		return $this->db->get("tblalbum")->result();
	}

	//function to get recently added artist
	public function getrecentaddartist()
	{
		$this->db->order_by("artistid","DESC");
		$this->db->limit(5);
		return $this->db->get("tblartist")->result();
	}
}
?>