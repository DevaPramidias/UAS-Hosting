<?php
class mobil_m extends CI_Model {

	private $table = 'rentalmobil';
	private $id = 'rental.idmobil';

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insertuser($user){
		return $this->db->insert('rentalmobil',$user);
	}

	public function getAllrentalmobil(){
		$query = $this->db->get('rentalmobil');
		return $query->result();
	}

	public function getUser($id){
		$query = $this->db->get_where('rentalmobil',array('idmobil'=>$id));
		return $query->row_array();
	}

	public function updateuser($user, $id){
		$this->db->where('rentalmobil.idmobil', $id);
		return $this->db->update('rentalmobil', $user);
	}

	public function deleteuser($id){
		$this->db->where('rentalmobil.idmobil', $id);
		return $this->db->delete('rentalmobil');
	}

	public function get_all()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}
}
?>