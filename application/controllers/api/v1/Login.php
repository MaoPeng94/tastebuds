<?php
	
	require APPPATH.'libraries/REST_Controller.php';

	class Login extends REST_Controller{
		function __construct(){
			parent::__construct();
		}
		function index_get($func){
			$data = [];
			switch ($func) {
				case 'profile':
					$data['success'] = "Profile Api Called!";
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
	}

?>