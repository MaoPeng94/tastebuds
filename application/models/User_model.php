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
			
			return array("success"=>0, "msg"=>$userdata);
			$useremail = $userdata['email'];
			$this->db->where("email", $useremail);
			$count = $this->db->count_all_results("tbl_users");
			if($count > 0) return array("success"=>0, "msg"=>"This email already used, please use another email.");
			
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
			if($query->num_rows() > 0){ return array("success"=>1, "user"=>$query->row_array()); }
			else return array("success"=>0, "user"=>null);
		}

		// Get single User by UserId

		function get_user($userId){
			$this->db->where("userId", $userId);
			$query = $this->db->get($this->table);
			if($query->num_rows() > 0){ return array("success"=>1, "user"=>$query->row_array()); }
			else return array("success"=>0, "user"=>null);
		}

		function remove_user($userId){

			$this->db->where("userId", $userId);
			$query = $this->db->delete($this->table);
			if($query) return array("success"=>1, "msg"=>"Delete user success!");
			return array("success"=>0, "msg"=>"Delete user failed!");

		}

	}

?>