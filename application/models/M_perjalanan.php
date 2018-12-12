<?php
class M_perjalanan extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get($id = null)	{
		if ($id!=null){
			$query = $this->db->query("SELECT * FROM `wisata` WHERE `kodeTempat` = '".$id."'");
			return $query->row_array();
		}
		return $this->db->query("SELECT * FROM `wisata`");
	}
}
?>