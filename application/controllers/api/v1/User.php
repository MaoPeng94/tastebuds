<?php
	
	require APPPATH.'libraries/REST_Controller.php';

	class User extends REST_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model("User_model", "user");
		}
		function index_get($func){
			$data = [];
			switch ($func) {
				case 'user':
					$data = $this->get_user();
					break;
				case 'matches':
					$data = $this->get_matches();
					break;
				case 'artists':
					$data = $this->get_artists();
					break;
				case 'aboutme':
					$data = $this->aboutme();
					break;
				case 'remove_artist':
					$data = $this->remove_artist();
					break;
				case 'subscribe':
					$data = $this->subscribe();
				default:
					break;
			}
			$this->response($data, REST_Controller::HTTP_OK);
		}

		function index_post($func){
			$data = [];
			switch ($func) {
				case 'signin':
					$data = $this->signin();
					break;
				case 'signup':
					$data = $this->signup();
					break;
				case 'like':
					$data = $this->like();
					break;
				case 'skip':
					$data = $this->skip();
					break;
				case 'upload':
					$data = $this->upload();
					break;
				case 'artist':
					$data = $this->add_artist();
					break;
				case 'update_question':
					$data = $this->update_question();
					break;
				case 'update_aboutme':
					$data = $this->update_aboutme();
					break;
				default:
					break;
			}
			$this->response($data, REST_Controller::HTTP_OK);
		}


		function signup(){
			$data = $this->input->post();
			$result = $this->user->register($data);
			return $result;
		}

		function signin(){
			$data = $this->input->post();
			$data['password'] = md5($data['password']);
			$result = $this->user->signin($data);
			return $result;
		}
		// get single user by userId
		function get_user(){
			$userId = $this->input->get("userId");
			$data = $this->user->get_user($userId);
			return $data;
		}
		
		function get_matches(){
			$data = $this->input->get();
			return $data;
		}
		function like(){
			$data = $this->input->post();
			return $data;
		}
		function skip(){
			$data = $this->input->post();
			return $data;
		}
		function upload(){
			$data = $this->input->post();
			return $data;
		}
		function add_artist(){
			$data = $this->input->post();
			return $data;
		}
		function remove_artist(){
			$data = $this->input->get();
			return $data;
		}
		function update_question(){
			$data = $this->input->post();
			return $data;
		}
		function update_aboutme(){
			$data = $this->input->post();
			return $data;
		}
		function aboutme(){
			$data = $this->input->get();
			return $data;
		}

		function get_artists(){
			$data = $this->input->get();
			return $data;
		}
		function subscribe(){
			$email = $this->input->get("email");
			$this->db->insert("tbl_subscribers", array("email"=>$email));
			if($this->db->insert_id()){
				return array("success"=>1, "msg"=>"");
			}
			else return array("success"=>0, "msg"=>"");
		}
	}

?>