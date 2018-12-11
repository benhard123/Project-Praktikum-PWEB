<?php 
	class ControllerWeb extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->library('session');
		}

		public function index(){
			$data=$this->session->userdata('logged_in');
			if ($data==NULL){
				$data['logged_in']=FALSE;
			}
			$this->load->view('home',$data);
		}

		public function login(){
			$data['dari']=$this->input->get('from');
			$data['passwordsalah']='';
			$this->load->view('login',$data);
		}

		public function artikel(){
			$data=$this->session->userdata('logged_in');
			$this->load->view('article',$data);
		}

		public function perjalanan(){
			$login=$this->session->userdata('logged_in');
			if ($login['logged_in']){
				$this->load->model('M_perjalanan');
				$data=$this->M_perjalanan->get($this->input->get('id'));
				$this->load->view('HalamanPerjalanan',$data);
			}
			else{
				redirect(base_url('sadaya/login?from=home'));
			}
		}
	}
?>