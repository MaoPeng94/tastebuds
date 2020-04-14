<?php
	
	class Resource extends CI_Controller{


		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->load->view("inc/header");
			$body_type = $this->db->get("tbl_bodytype");
			$ethnicity = $this->db->get("tbl_ethnicity");
			$religion = $this->db->get("tbl_religion");
			$status = $this->db->get("tbl_status");
			$orientation = $this->db->get("tbl_orientations");
			$data['bodyTypes'] = $body_type->result_array();
			$data['ethnicity'] = $ethnicity->result_array();
			$data['religion'] = $religion->result_array();
			$data['status'] = $status->result_array();
			$data['orientations'] = $orientation->result_array();			
			$this->load->view("resource", $data);
		}

		function insert_bodytype(){
			$input = $this->input->get("bodytype");
			$this->db->insert("tbl_bodytype", array("title"=>$input));
			redirect("resource");
		}
		function insert_ethnicity(){
			$input = $this->input->get("input");
			$this->db->insert("tbl_ethnicity", array("title"=>$input));
			redirect("resource");
		}
		function insert_religion(){
			$input = $this->input->get("input");
			$this->db->insert("tbl_religion", array("title"=>$input));
			redirect("resource");
		}
		function insert_status(){
			$input = $this->input->get("input");
			$this->db->insert("tbl_status", array("title"=>$input));
			redirect("resource");
		}
		function insert_orientation(){
			$input = $this->input->get("input");
			$this->db->insert("tbl_orientations", array("title"=>$input));
			redirect("resource");
		}
		function delete_bodytype($id){
			$this->db->where("id", $id);
			$this->db->delete("tbl_bodytype");
			redirect("resource");
		}
		function delete_ethnicity($id){
			$this->db->where("id", $id);
			$this->db->delete("tbl_ethnicity");
			redirect("resource");
		}
		function delete_religion($id){
			$this->db->where("id", $id);
			$this->db->delete("tbl_religion");
			redirect("resource");
		}
		function delete_status($id){
			$this->db->where("id", $id);
			$this->db->delete("tbl_status");
			redirect("resource");
		}
		function delete_orientation($id){
			$this->db->where("id", $id);
			$this->db->delete("tbl_orientations");
			redirect("resource");
		}
		function questionList(){
			$this->load->view("inc/header");
			$query = $this->db->get("tbl_questions");
			$data['questions'] = $query->num_rows() > 0?$query->result_array():array();
			$this->load->view("questions", $data);
		}

	}

?>