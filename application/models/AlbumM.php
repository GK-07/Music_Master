<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class AlbumM extends CI_Model
	{
		//function to get all artists from database
		public function getAllArtists()
		{
			return $this->db->get("tblartist")->result();
		}

		//function to get all moods from database
		public function getAllmoods()
		{
			return $this->db->get("tblmood")->result();
		}

		//functio to display moods info		
		public function getMoodsInfo($id)
		{
			return $this->db->where('moodid',$id)->get('tblmood')->result()[0];
		}

		//function to get liked songs
		public function getLikedSongs()
		{
			return $this->db->from("tblsonglikes sl")->join("tblsong s","s.songid=sl.songid")->where("sl.userid",$this->session->uid)->get()->result();
		}

		//function to get moods according to songs
		public function getMoodSongs($id)
		{
			return $this->db->from("tblmoodsongs ms")->join("tblsong s","s.songid=ms.songid")->where("moodid",$id)->get()->result();
		}

		//function to add comments to song
		public function addComment($data)
		{
			$this->db->set($data)->insert("tblsongcomments");
		}

		//function to get comments on song
		public function getSongCommnets($id)
		{
			return $this->db->where("s.songid",$id)->from("tblsongcomments s")->join("tbluser u","u.userid=s.userid")->get()->result();
		}

		//function to get artist more info
		public function getArtistInfo($id)
		{
			return $this->db->where("artistid",$id)->get("tblartist")->result()[0];
		}

		//function to get songs of artists
		public function getArtistsongs($id)
		{
			return $this->db->where("sa.artistid",$id)->from("tblsong s")->join("tblsongartist sa","sa.songid=s.songid")->get()->result();
		}

		//function get all albums 
		public function getAllAlbums()
		{
			return $this->db->where("status",0)->get("tblalbum")->result();
		}

		//function to get albums info by album id
		public function getAlbumInfo($id)
		{
			return $this->db->where("albumid",$id)->get("tblalbum")->result()[0];
		}

		//function to get songs by album id
		public function getAlbumSongs($id)
		{
			return $this->db->where(["albumid"=>$id,"status"=>0])->get("tblsong")->result();
		}

		//function to get song artist 
		public function getSongArtist($id)
		{
			return $this->db->where("sa.songid",$id)->from("tblsongartist sa")->join("tblartist a","a.artistid=sa.artistid")->get()->result();
		}

		//function to get song info
		public function getSongInfo($sid)
		{
			return $this->db->where("s.songid",$sid)->from("tblsong s")->join("tblcategory c","c.categoryid=s.categoryid")->join("tblalbum a","a.albumid=s.albumid")->get()->result()[0];	
		}

	}
?>