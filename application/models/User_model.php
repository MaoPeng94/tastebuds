<?php
	
	/* User management Model*/

	class User_model extends CI_Model{

		protected $table = '';
		function __construct(){
			parent::__construct();
			$this->table = "tbl_users";
		}

		// User Registeration function
		function register($userdata){
			$useremail = $userdata['email'];
			$this->db->where("email", $useremail);
			$count = $this->db->count_all_results("tbl_users");
			if($count > 0) return array("success"=>0, "msg"=>"This Email already used, please use another email.");
			
			$userdata['userId'] = 'user'.time();
			$userdata['password'] = md5($userdata['password']);
			$this->db->insert($this->table, $userdata);
			if($this->db->insert_id() > 0){ return array("success"=>1, "msg"=>"","id"=>$this->db->insert_id(), "userId"=>$userdata['userId']); }
			else return array("success"=>0, "msg"=>"Fail to insert DB");
		}

		// User Login function
		function signin($userdata){
			$this->db->where($userdata);
			$query = $this->db->get($this->table);
			if($query->num_rows() > 0){
				$user = $query->row_array();
				$this->db->where("userId", $user['userId']);
				$this->db->select("image");
				$query = $this->db->get("tbl_photos");
				$photos = $query->num_rows()>0?$query->result_array():null;
				$user['photos'] = $photos;
				$this->db->where("userId", $user['userId']);
				$this->db->select("uri,album,artist,image");
				$query = $this->db->get("tbl_user_tracks");
				if($query->num_rows()>0){ $user['track'] = $query->row_array(); }
				else{
					$user["track"] = array(
						"uri" => "spotify:album:0INZ6ake8mQrfXktOHSLEu",
						"album" => "the voicenotes",
						"artist" => "Alaina Castillo",
						"image" => "https://i.scdn.co/image/ab67616d0000b273b7d09d8197ee379e350feba6",
					);
				}
				$user['artists'] = $this->get_artists($user['userId']);
			 	return array("success"=>1, "user"=>$user); 
			}
			else return array("success"=>0, "user"=>null);
		}

		// Check Facebook USER
		function check_fb_user($email){
			$this->db->where("email", $email);
			$this->db->where("fb_user", 1);
			$query = $this->db->get($this->table);
			if($query->num_rows() > 0){
				$user = $query->row_array();
				$this->db->where("userId", $user['userId']);
				$this->db->select("image");
				$query = $this->db->get("tbl_photos");
				$photos = $query->num_rows()>0?$query->result_array():null;
				$user['photos'] = $photos;
				$this->db->where("userId", $user['userId']);
				$this->db->select("uri,album,artist,image,url");
				$query = $this->db->get("tbl_user_tracks");
				if($query->num_rows()>0){
					$user['track'] = $query->row_array();
				}
				else{
					$user["track"] = array(
						"uri" => "spotify:album:0INZ6ake8mQrfXktOHSLEu",
						"album" => "the voicenotes",
						"artist" => "Alaina Castillo",
						"image" => "https://i.scdn.co/image/ab67616d0000b273b7d09d8197ee379e350feba6",
						"url" => "https://open.spotify.com/album/0INZ6ake8mQrfXktOHSLEu"
					);
				}
				$user['artists'] = $this->get_artists($user['userId']);
			 	return array("success"=>1, "user"=>$user); 
			}
			else return array("success"=>0, "user"=>null);
		}
		function fb_login($data){
			$useremail = $data['email'];
			$this->db->where("email", $useremail);
			$count = $this->db->count_all_results("tbl_users");
			if($count > 0) return array("success"=>0, "msg"=>"This Email already used, please use another email.");

			$this->db->insert($this->table, $data);
			if($this->db->insert_id() > 0){
				return $this->check_fb_user($data['email']);
			}
			else return array("success"=>0, "msg"=>"Fail to insert DB");
		}

		// Get single User by UserId

		function get_user($userId){
			$this->db->where("userId", $userId);
			$query = $this->db->get($this->table);
			$user = $query->result_array();
			$this->db->where("userId", $userId);
			$query = $this->db->get("tbl_photos");
			$photos = $query->num_rows()>0?$query->result_array():array();
			$user['photos'] = $photos;
			if($query->num_rows() > 0){ return array("success"=>1, "user"=>$user); }
			else return array("success"=>0, "user"=>null);
		}

		function remove_user($userId){

			$this->db->where("userId", $userId);
			$query = $this->db->delete($this->table);
			if($query) return array("success"=>1, "msg"=>"Delete user success!");
			return array("success"=>0, "msg"=>"Delete user failed!");

		}

		function get_artists($userId){
			$this->db->where("userId", $userId);
			$this->db->order_by("artist");
			$this->db->select("id,artist,spotifyId, image");
			$query = $this->db->get("tbl_user_artists");
			return $query->result_array();
		}

		function delete_artist($data){
			$userId = $data['userId'];
			$artistId = $data['artistId'];
			$this->db->where(array("userId"=>$userId, "id"=>$artistId));
			$query = $this->db->delete("tbl_user_artists");
			if($query) return true;
			else return false;
		}

		function get_matches($userId){
			$this->db->limit(20);
			$this->db->where("userId !=", $userId);
			$query = $this->db->get("tbl_users");
			$users = $query->result_array();
			foreach($users as $key=>$user){
				$this->db->where("userId", $user['userId']);
				$this->db->select("image");
				$query = $this->db->get("tbl_photos");
				$photos = $query->num_rows()>0?$query->result_array():null;
				$users[$key]['photos'] = $photos;

				$this->db->where("userId", $user['userId']);
				$this->db->select("uri,album,artist,image,url");
				$query = $this->db->get("tbl_user_tracks");
				if($query->num_rows()>0){
					$users[$key]['track'] = $query->row_array();
				}
				else{
					$users[$key]["track"] = array(
						"uri" => "spotify:album:0INZ6ake8mQrfXktOHSLEu",
						"album" => "the voicenotes",
						"artist" => "Alaina Castillo",
						"image" => "https://i.scdn.co/image/ab67616d0000b273b7d09d8197ee379e350feba6",
						"url" => "https://open.spotify.com/album/0INZ6ake8mQrfXktOHSLEu"
					);
				}
				$users[$key]['artists'] = $this->get_artists($user['userId']);
			}
		 	return $users;
		}

		function set_like($data){
			$this->db->insert("tbl_user_likes", $data);
			return $this->db->insert_id();
		}

	}

?>