<?php
	
	require APPPATH.'libraries/REST_Controller.php';

	class Question extends REST_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model("Question_model", "question");
		}

		function index_get($func){
			$data = [];
			switch ($func) {
				case 'all':
					$data = $this->get_all_questions();
					break;
				case 'user':
					$data = $this->get_user_questions();
					break;
				default:
					break;
			}
			$this->response($data, REST_Controller::HTTP_OK);
		}

		function get_all_questions() {
			$questions = $this->question->get_all_questions();
			return $questions;
		}

		function get_user_questions() {
			$user_id = $this->input->get("user_id");
			$data = $this->question->get_user_questions($user_id);
			return $data;
		}
	}

?>