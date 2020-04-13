<?php
	
	require APPPATH.'libraries/REST_Controller.php';

	class User extends REST_Controller{
		function __construct(){
			parent::__construct();
		}
		function index_get($func){
			$data = [];
			switch ($func) {
				case 'profile':
					$result = $this->profile();
					$data['data'] = $result;
					$data['success'] = "Profile Api Called!";
					break;
				case 'user':
					$data['userId'] = $this->input->get("userId");
					break;
				case 'matches':
					$data['userId'] = $this->input->get("userId");
					break;
				default:
					break;
			}
			$this->response($data, REST_Controller::HTTP_OK);
		}

		function index_post($func){
			$data = [];
			switch ($func) {
				case 'signin':
					$result = $this->signin();
					$data['data'] = $result;
					$data['success'] = "Sign in function called!";
					break;
				case 'signup':
					$result = $this->signup();
					$data['data'] = $result;
 					$data['success'] = "Sign up function called!";
					break;
				case 'like':
					$data['data'] = $this->like();
					break;
				case 'skip':
					$data['userId'] = $this->skip();
					break;

				default:
					break;
			}
			$this->response($data, REST_Controller::HTTP_OK);
		}

		function signup(){
			$data = $this->input->post();
			return $data;
		}

		function signin(){
			$data = $this->input->post();
			return $data;
		}

		function profile(){
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
	}

?>