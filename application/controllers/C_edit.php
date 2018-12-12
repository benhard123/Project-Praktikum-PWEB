<?php 
	class C_edit extends CI_Controller {

		public function edit(){
			$config['upload_path']          = realpath('C:\xampp\htdocs\sadaya\assets\gambar_tempat');
			$config['allowed_types']        = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$this->upload->do_upload('gambar');
			$this->upload->data()['file_name'];
		}	
	}
?>