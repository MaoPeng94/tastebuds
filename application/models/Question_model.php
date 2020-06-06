<?php
	
	/* Question management Model*/

	class Question_model extends CI_Model{

		protected $table = '';
		function __construct(){
			parent::__construct();
			$this->table = "tbl_questions";
		}

		function get_all_questions(){
			$query = $this->db->get("tbl_questions");
			$questions = $query->result_array();
			return $questions;
		}

		function get_user_questions($user_id) {
			$query = $this->db->get("tbl_questions");
			$data['questions'] = $query->result_array();

			$this->db->where("user_id", $user_id);
			$query = $this->db->get("tbl_answers");
			$data['answers'] = $query->result_array();

			$answers = $data['answers'];
			$questions = $data['questions'];

			$result = array();
			foreach ($questions as $key => $question) {
				$item['question_id'] = $question['id'];
				$item['question'] = $question['question'];

				$count = count($answers);
				for ($i = 0; $i < $count; $i ++) {
					if($answers[$i]['question_id'] == $question['id']) {
						$item['answer'] = $answers[$i]['answer'];
						break;
					}
				}
				if($i == $count) $item['answer'] = null;
				$result[$key] = $item;
			}			
			$data['result'] = $result;

			return $data;
		}
	}

?>