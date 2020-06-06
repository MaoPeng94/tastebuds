<?php
	
	/* Answer management Model*/

	class Answer_model extends CI_Model{

		protected $table = '';

		function __construct(){
			parent::__construct();
			$this->table = "tbl_answers";
		}

		function add_answer($data){
			$answer = $data;
			$this->db->where('user_id', $answer['user_id']);
			$this->db->where('question_id', $answer['question_id']);
			$q = $this->db->get($this->table);

			if ( $q->num_rows() > 0 ) {
				$this->db->where('user_id', $answer['user_id']);
				$this->db->where('question_id', $answer['question_id']);
				$this->db->update($this->table, $answer);

				return array("success" => 1);
			} else {
				$this->db->insert($this->table, $answer);
				$id = $this->db->insert_id();
				
				return array("success" => 1, "question_id" => $id);
			}
		}
	}

?>