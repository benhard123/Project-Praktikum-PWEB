<?php 
	class ControllerWeb extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->library('session');
		}

		public function index(){
			$data=$this->session->userdata('logged_in');
			$this->load->view('home',$data);
		}

		public function login(){
			$data['passwordsalah']='';
			$this->load->view('login',$data);
		}

	}
?>