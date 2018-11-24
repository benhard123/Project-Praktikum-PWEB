<?php 
	class ControllerWeb extends CI_Controller {

		function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->load->view('home');
		}

		public function login(){
			$this->load->view('login');
		}

		public function register(){
			$this->load->view('registrasi');
		}

	}
?>