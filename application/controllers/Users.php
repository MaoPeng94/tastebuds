<?php

class Users extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->model("User_model", "user");
	}

	function index(){
		$this->load->view("inc/header");
		$query = $this->db->get("tbl_users");
		$data['users'] = $query->result_array();
		$this->load->view("users/index", $data);
	}
	function profile($userId){

		$data['userId'] = $userId;
		$this->load->view("inc/header");
		$user = $this->user->get_user($userId);
		if($user['success'] == 0) redirect("users");
		$data['user'] = $user['user'];
		$this->load->view("users/profile", $data);

	}

	function delete_user($userId){

		$result = $this->user->remove_user($userId);
		$this->session->set_flashdata("delete_user", $result);
		redirect("users");
	}

}