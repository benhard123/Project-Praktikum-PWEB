<?php
class M_Transaksi extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function masukanTransaksi($data)	{
		return $this->db->query("INSERT INTO `transaksi`(`kodeTempat`, `username`, `jumlah_orang`, `tanggal`, `nomor_telepon`, `metodeBayar`, `Nama`) VALUES ('".$data['kodeTempat']."','".$data['username']."','".$data['jumlah_orang']."','".$data['tanggal']."','".$data['nomor_telepon']."','".$data['metodeBayar']."','".$data['Nama']."')");
	}
}
?>