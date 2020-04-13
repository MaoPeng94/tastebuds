<?php

	require APPPATH . 'libraries/REST_Controller.php';

	class Users extends REST_Controller{
		function __construct(){
			parent::__construct();
		}
		function index_get($func){
			$data = [];
			switch ($func) {
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
				case 'like':
					$data['userId'] = $this->input->get("userId");
					break;
				case 'skip':
					$data['userId'] = $this->input->get("userId");
					break;
				default:
					break;
			}
			$this->response($data, REST_Controller::HTTP_OK);
		}
		function index_put(){

		}
		function index_delete(){

		}
	}

?>