<?php 
	class C_regist extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->model('m_regist');
			$this->load->library('form_validation');
			$this->load->helper(array('form'));
		}

		public function register(){
			$this->form_validation->set_rules('pengguna','Username','required');
			$this->form_validation->set_rules('namaPengguna','Names','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('katakunci','Password','required');
			$this->form_validation->set_rules('katakunciPasti','Password Confirmation','required');
			if($this->form_validation->run() == FALSE){
				$data['passwordtidaksama']=$this->input->get('ok');
				$this->load->view('registrasi',$data);
			}
			else{
				$this->regist();
			}
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
				redirect('/sadaya/register?ok=password tidak sama','refresh');
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