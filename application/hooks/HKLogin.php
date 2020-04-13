<?php
	
	class HKLogin {

		var $CI;
		function __construct(){
			$this->CI = &get_instance(); 
		}

		function HKL_check(){
			if( strtolower($this->CI->router->class) == 'login' || strtolower($this->CI->router->directory) == "api/v1/"){ return true; } 
		    if (!isset($this->CI->session)){ $this->CI->load->library('session'); } 
		    if(!$this->CI->session->userdata('log_status')){ redirect("login");}
		    else{ return true; }
		}

	}
