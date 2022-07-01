<?php
class Minibus_m extends CI_Model {

	private $table = 'minibus';
	private $id = 'rental.id';

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insertuser($user){
		return $this->db->insert('minibus',$user);
	}

	public function getAllMinibus_c(){
		$query = $this->db->get('minibus');
		return $query->result();
	}

	public function getUser($id){
		$query = $this->db->get_where('minibus',array('id'=>$id));
		return $query->row_array();
	}

	public function updateuser($user, $id){
		$this->db->where('minibus.id', $id);
		return $this->db->update('minibus', $user);
	}

	public function deleteuser($id){
		$this->db->where('minibus.id', $id);
		return $this->db->delete('minibus');
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