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

	public function getTransaksi($username){
		return $this->db->query("SELECT `transaksi`.`kodeTransaksi`, `wisata`.`namaTempat`, `transaksi`.`jumlah_orang`, `transaksi`.`tanggal`, `transaksi`.`nomor_telepon`, `transaksi`.`metodeBayar`, `transaksi`.`nama` FROM `transaksi`,`wisata` WHERE `transaksi`.`username`='".$username."' AND `wisata`.`kodeTempat`=`transaksi`.`kodeTempat`");
	}

	public function hapusTransaksi($id){
		return $this->db->query("DELETE FROM `transaksi` WHERE `kodeTransaksi`='".$id."'");
	}
}
?>