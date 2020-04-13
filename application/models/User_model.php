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

	}

?>