<?php
	
	require APPPATH.'libraries/REST_Controller.php';

	class Answer extends REST_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model("Answer_model", "answer");
		}

		function index_get($func){
			$data = [];
			switch ($func) {
				default:
					break;
			}
			$this->response($data, REST_Controller::HTTP_OK);
		}

		function index_post($func){
			$data = [];
			switch ($func) {
				case 'add_answer':
					$data = $this->add_answer();
					break;
				
				default:
					break;
			}
			$this->response($data, REST_Controller::HTTP_OK);
		}

		function add_answer(){
			$data = $this->input->post();
			$result = $this->answer->add_answer($data);
			return $result;
		}
	}

?>