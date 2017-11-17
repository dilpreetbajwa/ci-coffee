<?php
class Authmodel extends CI_Model {
	
	public function insert($table, $data){
		$this->db->insert($table, $data);
	}
	public function verify($email){
		$this->db->where('email', $email);
		$query=$this->db->get('users');
		return $query->row();		
	}
	public function login($email, $password){
		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		$query=$this->db->get('users');
		return $query->row();		
	}
	
}