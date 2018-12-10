<?php
class M_regist extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getusername($id = null)	{
		if ($id != null){
			$query = $this->db->query("SELECT * FROM `user` WHERE `username` COLLATE latin1_bin = '".$id."'");
			return $query->result_array();
		}

		$query = $this->db->get_where('user');
		return $query->result_array();
	}

	public function getemail($id = null)	{
		if ($id != null){
			$query = $this->db->query("SELECT * FROM `user` WHERE `email` COLLATE latin1_bin = '".$id."'");
			return $query->result_array();
		}

		$query = $this->db->get_where('user');
		return $query->result_array();
	}

	public function masukan($data){
		$password_query = md5($data['password']);
		return $this->db->query("INSERT INTO `user`(`username`, `password`, `names`, `email`) VALUES ('".$data['username']."','".$password_query."','".$data['name']."','".$data['email']."')");
	}
}