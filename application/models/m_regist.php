<?php
class m_login extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getusername($id = null)	{
		if ($id != null){
			$query = $this->db->query("SELECT * FROM `user` WHERE `username` COLLATE latin1_bin = '".$data['username']."'");
			return $query->result_array();
		}

		$query = $this->db->get_where('user');
		return $query->result_array();
	}
}