<?php 
	class ControllerWeb extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->library('form_validation');
		}

		public function index(){
			$data=$this->session->userdata('logged_in');
			$this->load->view('home',$data);
		}

		public function login(){
			$data['passwordsalah']='';
			$this->load->view('login',$data);
		}

		public function register(){
			//$this->form_validation->set_rules()
			$this->load->view('registrasi');
		}

	}
?>