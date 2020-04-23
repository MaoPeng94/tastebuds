<?php

	require APPPATH.'libraries/REST_Controller.php';

	class Setting extends REST_Controller{

		function __construct(){
			parent::__construct();
		}
		function index_get($func){
			
			switch ($func) {
				case 'get_assets':
					$data = $this->get_assets();
					break;
				
				default:
					# code...
					break;
			}
			$this->response($data, REST_Controller::HTTP_OK);
		}
		function index_post($func){
			switch ($func) {
				case 'save_setting':
					$data = $this->save_setting();
					break;
				case "save_email_setting":
					$data = $this->save_email_setting();
				case "save_privacy_setting":
					$data = $this->save_privacy_setting();
				default:
					# code...
					break;
			}
			$this->response($data, REST_Controller::HTTP_OK);

		}

		function get_assets(){
			$data = [];
			$query = $this->db->get("tbl_bodytype");
			$data["bodytypes"] = $query->result_array();
			$query = $this->db->get("tbl_ethnicity");
			$data['ethnicitys'] = $query->result_array();
			$query = $this->db->get("tbl_nationality");
			$data['nationalitys'] = $query->result_array();
			$query = $this->db->get("tbl_orientations");
			$data["orientations"] = $query->result_array();
			$query = $this->db->get("tbl_religion");
			$data["religions"] = $query->result_array();
			$query = $this->db->get("tbl_status");
			$data['statuses'] = $query->result_array();
			return $data;
		}
		function save_setting(){
			$data = $this->input->post();
			$userId = $data['userId'];
			unset($data['userId']);
			$this->db->where("userId", $userId);
			$query = $this->db->update("tbl_users", $data);
			if($query) return array("success"=>1, "data"=>$data);
			else return array("success"=>0,"data"=>$data);
		}
		function save_email_setting(){

			$data = $this->input->post();
			$userId = $data['userId'];
			unset($data['userId']);
			$this->db->where("userId", $userId);
			$query = $this->db->update("tbl_users", $data);
			if($query) return array("success"=>1, "data"=>$data);
			else return array("success"=>0,"data"=>$data);

		}

		function save_privacy_setting(){
			$data = $this->input->post();
			$userId = $data['userId'];
			unset($data['userId']);
			$this->db->where("userId", $userId);
			$query = $this->db->update("tbl_users", $data);
			if($query) return array("success"=>1, "data"=>$data);
			else return array("success"=>0,"data"=>$data);
		}
	}
?>