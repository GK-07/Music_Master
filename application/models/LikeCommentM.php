<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class LikeCommentM extends CI_Model
	{
		//function to check wether user has liked a song or not
		public function doesLike($sid,$uid)
		{
			$where=array(
				"songid"=>$sid,
				"userid"=>$uid
			);
			if($this->db->where($where)->get("tblsonglikes")->num_rows()>0)
				return true;
			else
				return false;
		}

		//function to add like on a song by user
		public function addLike($id,$uid)
		{
			$this->db->set(["songid"=>$id,"userid"=>$uid])->insert("tblsonglikes");
		}

		//function to remove like from the song
		public function removeLike($id,$uid)
		{
			$this->db->where(["songid"=>$id,"userid"=>$uid])->delete("tblsonglikes");
		}

	}
?>