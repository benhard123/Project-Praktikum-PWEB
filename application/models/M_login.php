<?php
class M_login extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get($id = null)	{
		if ($id != null){
			$query = $this->db->query("SELECT `username`, `names`, `email` FROM `user` WHERE `username` COLLATE latin1_bin = '".$data['username']."'");
			return $query->result_array();
		}

		$query = $this->db->get_where('user');
		return $query->result_array();
	}

	public function auth($data){
		$password_query = md5($data['password']);
		$query = $this->db->query("SELECT * FROM `user` WHERE `username` COLLATE latin1_bin = '".$data['username']."' AND `password` COLLATE latin1_bin = '".$password_query."'");
		$ok=$this->db->last_query();
		return $query->result_array();
	}
}