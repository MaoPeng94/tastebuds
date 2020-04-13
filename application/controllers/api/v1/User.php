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
					$data['data'] = $this->get_user();
					break;
				case 'matches':
					$data['data'] = $this->get_matches();
					break;
				case 'artist':
					$data['data'] = $this->remove_artist();
					break;
				case 'aboutme':
					$data['data'] = $this->aboutme();
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
					$data['data'] = $this->skip();
					break;
				case 'upload':
					$data['data'] = $this->upload();
					break;
				case 'artist':
					$data['data'] = $this->add_artist();
					break;
				case 'question':
					$data['data'] = $this->update_question();
					break;
				case 'aboutme':
					$data['data'] = $this->update_aboutme();
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

		function get_user(){
			$data = $this->input->get();
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
	}

?>