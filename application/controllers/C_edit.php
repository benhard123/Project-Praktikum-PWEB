<?php 
	class C_edit extends CI_Controller {

		public function edit(){
			$config['upload_path']          = realpath('.\assets\gambar_tempat');
			$config['allowed_types']        = 'gif|jpg|png';
			$this->load->library('upload', $config);
			echo $config['upload_path'];
			echo $this->upload->do_upload('gambar');
			echo $this->upload->data()['file_name'];
		}	
	}
?>