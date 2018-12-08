<?php 
	class c_regist extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->model('m_regist');
		}

		public function regist(){
			$data = [
				'username' => $this->input->post('pengguna'),
				'name' => $this->input->post('namaPengguna'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('katakunci'),
				'password2' => $this->input->post('katakunciPasti')
			];

			$test=$this->m_regist->getusername($data['username']);

			if($test != NULL){
				
			}
		}

	}
?>