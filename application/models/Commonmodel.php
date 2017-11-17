<?php
	class Commonmodel extends CI_Model {
		#admin
		public function getWhere($table, $id){
			$this->db->where('id', $id);
			$query=$this->db->get($table);
			return $query->row();		
		}
		
		public function get($table){
			$this->db->order_by('id', 'desc');
			$query=$this->db->get($table);
			return $query->result();		
		}
		
		public function insert($table, $data){
			$this->db->insert($table, $data);
			return $this->db->insert_id();
		}
		
		public function update($table, $data, $id){
			$this->db->where('id', $id);
			$this->db->update($table, $data);		
		}
		
		public function delete($table, $id){
			$this->db->where('id', $id);
			$this->db->delete($table);		
		}
		
		function arrayWhere($table, $data) {
			$this->db->order_by('id', 'desc');
			$this->db->where('status', '1');
			$query = $this->db->get_where($table, $data);
			return $query->result();
		}
		
		
		function countWhere($table, $array) {
			$query = $this->db->get_where($table, $array);
			return $query->num_rows();
		}
		
		#front
		public function getStatus($table){
			$this->db->order_by('id', 'desc');
			$this->db->where('status', '1');
			$query=$this->db->get($table);
			return $query->result();		
		}
				
		public function getFront($table, $limit){
			$this->db->order_by('id', 'desc');
			$this->db->where('status', '1');
			$this->db->limit($limit);
			$query=$this->db->get($table);
			return $query->result();		
		}
		
		
	}	