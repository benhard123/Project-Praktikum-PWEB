<?php 
	class C_transaksi extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->library('session');
		}

		public function viewtransaksi(){
			$userdata=$this->session->userdata('logged_in');
			$data=array(
				'tanggal' => $this->input->post('tanggal'),
				'kuantitas' => $this->input->post('kuantitas'),
				'idTempat' => $this->input->get('id'),
				'Names' => $userdata['username']
			);
			$this->load->view('HalamanKonfirmasiTransaksi',$data);
		}

		public function transaksi(){
			$userdata=$data=$this->session->userdata('logged_in');
			$data=array(
				'tanggal' => $this->input->get('tanggal'),
				'jumlah_orang' => $this->input->get('kuantitas'),
				'kodeTempat' => $this->input->get('id'),
				'username' => $userdata['username'],
				'Nama' => $this->input->post('namaLengkap'),
				'nomor_telepon' => $this->input->post('nomorTelfon'),
				'metodeBayar' => $this->input->post('metode')
			);
			$this->load->model('M_Transaksi');
			$this->M_Transaksi->masukanTransaksi($data);
			redirect(base_url('sadaya'));
		}
	}
?>