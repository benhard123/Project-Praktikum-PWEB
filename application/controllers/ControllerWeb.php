<?php 
	class ControllerWeb extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->library('session');
		}

		public function index(){
			$this->load->view('home');
		}

		public function login(){
			$data['passwordsalah']='';
			$this->load->view('login',$data);
		}

		public function register(){
			$this->load->view('registrasi');
		}

	}
?>