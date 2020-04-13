<?php
	
	class Login extends CI_Controller{

		function index(){
			$this->load->view("signin");
		}

		function user_login(){
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$this->db->where("username", $username);
			$user_count = $this->db->count_all_results("tbl_admin");
			if($user_count == 0) {
				$this->session->set_flashdata("login_result","username");
				redirect("login");
			}
			
			$this->db->where(array("username"=>$username, "password"=>$password));
			$query = $this->db->get("tbl_admin");
			if($query->num_rows() == 0 ){
				$this->session->set_flashdata("login_result","password");
				redirect("login");
			}
			$user = $query->row_array();
			$this->session->set_userdata("log_status", "super_admin");
			$this->session->set_userdata("user", $user);
			redirect("dashboard");
		}
		function user_logout(){
			$this->session->sess_destroy();
			redirect("login");
		}

	}

?>