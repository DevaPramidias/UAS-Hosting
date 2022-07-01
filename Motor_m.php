<?php
class Motor_m extends CI_Model {

	private $table = 'motor';
	private $id = 'rental.id';

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insertuser($user){
		return $this->db->insert('motor',$user);
	}

	public function getAllMotor_c(){
		$query = $this->db->get('motor');
		return $query->result();
	}

	public function getUser($id){
		$query = $this->db->get_where('motor',array('id'=>$id));
		return $query->row_array();
	}

	public function updateuser($user, $id){
		$this->db->where('motor.id', $id);
		return $this->db->update('motor', $user);
	}

	public function deleteuser($id){
		$this->db->where('motor.id', $id);
		return $this->db->delete('motor');
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