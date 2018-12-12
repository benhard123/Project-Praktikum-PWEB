<?php 
	class C_transaksi extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->helper(array('form'));
		}

		public function viewtransaksi(){
			$this->form_validation->set_rules('namaLengkap','Nama','required');
			$this->form_validation->set_rules('nomorTelfon','Nomor HP','required');
			$this->form_validation->set_rules('metode','Metode Pembayaran','required');
			$userdata=$this->session->userdata('logged_in');
			$data=array(
				'tanggal' => $this->input->post('tanggal'),
				'kuantitas' => $this->input->post('kuantitas'),
				'idTempat' => $this->input->get('id'),
				'Names' => $userdata['username']
			);
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('HalamanKonfirmasiTransaksi',$data);
			}
			else{
				redirect(base_url()."C_transaksi/transaksi?id=".$data['idTempat']."&tanggal=".$data['tanggal']."&kuantitas=".$data['kuantitas']);
			}
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
			echo "<script>alert('Transaksi sudah terkonfirmasi');</script>";
			redirect(base_url('sadaya'));
		}
	}
?>