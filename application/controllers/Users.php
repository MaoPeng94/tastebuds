<?php

class Users extends CI_Controller{


	function __construct(){
		parent::__construct();
	}

	function index(){

		$this->load->view("inc/header");
		$this->load->view("users/index");

	}
	function profile($userId){

		$data['userId'] = $userId;
		$this->load->view("inc/header");
		$this->load->view("users/profile", $data);

	}

}