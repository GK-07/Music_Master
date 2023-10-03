<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class AlbumC extends CI_Controller
	{
		//Calling constructor
		public function __construct()
		{
			//calling constructor of parent class
			parent::__construct();
			//invoking the constructor AlbumM,LikeCommentM
			$this->load->model("AlbumM","am");
			$this->load->model("LikeCommentM","lm");
			//$this->session->uid=1;
			//session_destroy();
		}

		//function to get songs according to moods
		public function moods_more_info($id)
		{
			$data=$this->am->getMoodSongs($id);

			$temp=array(
				"songs"=>$data,
				"moodinfo"=>$this->am->getMoodsInfo($id)
			);
			$this->load->view('moodsInfo',$temp);
		}

		//function to display all moods
		public function Moods()
		{
			$temp=array(
				"moods"=>$this->am->getAllmoods()
			);
			$this->load->view("moods",$temp);
		}

		//function to display all the atrists
		public function getAllArtists()
		{
			$temp=array(
				"artists"=>$this->am->getAllArtists()
			);
			$this->load->view("artist.php",$temp);	
		}

		//function to display all the albums
		public function index()
		{
			$temp=array(
				"albums"=>$this->am->getAllAlbums()
			);
			$this->load->view("album.php",$temp);
		}

		//function to add comment on a song
		public function AddCommnet($id)
		{
			$data=array(
				"songid"=>$id,
				"comments"=>$this->input->post("txtCom"),
				"userid"=>$this->session->uid
			);

			$this->am->addComment($data);
			redirect("AlbumC/songsMoreInfo/$id");
		}

		//Function to display information of artists like songs,info etc
		public function artist_more_info($id)
		{
			$ainfo=$this->am->getArtistInfo($id);
			$asongs=$this->am->getArtistsongs($id);
			foreach ($asongs as $key) {
				$key->artists=$this->am->getSongArtist($key->songid);
				if($this->session->uid)
					$key->likest=$this->lm->doesLike($key->songid,$this->session->uid);
				else
					$key->likest=null;
			}
			$temp=array(
				"artist"=>$ainfo,
				"songs"=>$asongs
			);
			$this->load->view("artistMoreInfo",$temp);
		}

		//function to get all the liked songs of user.
		public function likedSongs()
		{
			if(!$this->session->uid)
			{
				$error=array(
					"error"=>"Not logged in",
					"errorMsg"=>"Please Login to manage Your favorite list"
				);

			}
			else
			{
				$error=null;
				$temp["songs"]=$this->am->getLikedSongs();
			}
			$temp["error"]=$error;
	/*		echo "<pre>";
			print_r($temp);
			echo "</pre>";
			die();*/
			$this->load->view("likedSongs",$temp);
		}

		//function to display all songs of an album
		public function album_more_info($id)
		{
			$album=$this->am->getAlbumInfo($id);
			$albumsongs=$this->am->getAlbumSongs($id);
			foreach ($albumsongs as $key) {
				$key->artists=$this->am->getSongArtist($key->songid);
				if($this->session->uid)
				$key->likest=$this->lm->doesLike($key->songid,$this->session->uid);
				else
				$key->likest=null;
			}
			$temp=array(
				"albuminfo"=>$album,
				"songs"=>$albumsongs
			);
			/*echo "<pre>";
				print_r($temp);
			echo "</pre>";*/
			$this->load->view("albuminfo.php",$temp);
		}

		//Function to display more info of songs, which contains song info,artist,commnets etc
		public function songsMoreInfo($sid)
		{
			$songInfo=$this->am->getSongInfo($sid);
			$songInfo->artists=$this->am->getSongArtist($songInfo->songid);

			if($this->session->uid)
				$songInfo->likest=$this->lm->doesLike($songInfo->songid,$this->session->uid);
			else
				$songInfo->likest=null;
			$comments=$this->am->getSongCommnets($sid);
			$temp=array(
				"songInfo"=>$songInfo,
				"comments"=>$comments
			);
			/*echo "<pre>";
				print_r($temp);
			echo "</pre>";*/
			$this->load->view("songInfo",$temp);
		}

		//function to like songs
		public function LikeSong($sid,$aid=null)
		{
			$this->lm->addLike($sid,$this->session->uid);
			if($aid!=null)
				redirect("AlbumC/album_more_info/$aid");
			else
				redirect("AlbumC/songsMoreInfo/$sid");
		}

		//function to unlike songs
		public function UnlikeSong($sid,$aid=null)
		{
			$this->lm->removeLike($sid,$this->session->uid);
			if($aid!=null)
				redirect("AlbumC/album_more_info/$aid");
			else
				redirect("AlbumC/songsMoreInfo/$sid");
		}
	}
?>