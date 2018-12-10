<?php 
	class C_regist extends CI_Controller {

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
				redirect('/sadaya/register','refresh');
				return;
			}
			$test=$this->m_regist->getemail($data['email']);
			if($test != NULL){
				redirect('/sadaya/register','refresh');
				return;
			}
			if(strcmp($data['password'],$data['password2'])!=0){
				redirect('/sadaya/register','refresh');
				return;
			}

			$result=$this->m_regist->masukan($data);
			if($result){
				echo "<script>alert('anda telah terdaftar, terima kasih)</script>";
				redirect(base_url('sadaya'));
			}
		}

	}
?>