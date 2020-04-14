<?php
	
	class Membership extends CI_Controller{


		function __construct(){

			parent::__construct();

		}

		function index(){
			$this->load->view("inc/header");
			$this->load->view("users/index");
		}

	}

?>