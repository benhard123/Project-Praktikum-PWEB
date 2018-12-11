<?php 
	class C_login extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->library('session');
		}

		public function login(){
			$data = array(
				'username' => $this->input->post('pengguna'),
				'password' => $this->input->post('katakunci')
			);
			if($data == NULL){
				$this->load->view('login');
				return;
			}

			$this->load->model('m_login');

			$result['data'] = $this->m_login->auth($data);

			if($result['data']==NULL){
				$data2['passwordsalah'] = "username / password salah";
				$this->load->view('login',$data2);
			}
			else{
				$data3= $this->m_login->get($data['username']);
				$data3['logged_in']=TRUE;
				$this->session->set_userdata('logged_in',$data3);
				redirect(base_url('sadaya'));
			}			
		}
		public function logout(){
			$this->session->unset_userdata('logged_in');
			$data['logged_in']=FALSE;
			$this->session->set_userdata('logged_in',$data);
			redirect(base_url('sadaya'));
		}
	}
?>