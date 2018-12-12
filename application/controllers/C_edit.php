<?php 
	class C_edit extends CI_Controller {

		public function edit(){
			$config['upload_path']          = realpath('C:\xampp\htdocs\sadaya\assets\gambar_tempat');
			$config['allowed_types']        = 'gif|jpg|png';
			$this->load->library('upload', $config);
			echo $this->upload->do_upload('gambar');
			echo $this->upload->display_errors();
			echo $this->upload->data()['file_name'];
			echo $this->input->post('namaTempat');
		}	
	}
?>