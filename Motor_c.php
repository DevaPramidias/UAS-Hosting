<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Motor_m');
	}

	public function tambah()
	{
		$data['title'] = 'Rental Motor';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/tambah_motor');
		$this->load->view('templates/footer');

	}

	public function index()
	{
		$data['title'] = 'Rental Motor';
		$data['motor'] = $this->Motor_m->getAllMotor_c();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/tampil_motor', $data);
		$this->load->view('templates/footer');

	}

	public function insert()
	{
		$user['penyewa']=$this->input->post('penyewa');
		$user['tanggal_lahir']=$this->input->post('tanggal_lahir');
		$user['alamat']=$this->input->post('alamat');
		$user['nik']=$this->input->post('nik');
		$user['tipe_motor']=$this->input->post('tipe_motor');
		$user['nopol']=$this->input->post('nopol');
		$user['lama_sewa']=$this->input->post('lama_sewa');
		$user['biaya_sewa']=$this->input->post('biaya_sewa');
		$user['keterangan']=$this->input->post('keterangan');


		$query=$this->Motor_m->insertuser($user);
		if($query){
			header('location:'.base_url('Motor_c/index'));
		}
	}

	public function ubah($id){
		$data['motor'] = $this->Motor_m->getUser($id);
		$data['title'] = 'Rental Motor';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar',);
		$this->load->view('templates/ubah_motor', $data);
		$this->load->view('templates/footer');

	}

	public function update($id){
		$user['penyewa'] = $this->input->post('penyewa');
		$user['tanggal_lahir'] = $this->input->post('tanggal_lahir');
		$user['alamat'] = $this->input->post('alamat');
		$user['nik'] = $this->input->post('nik');
		$user['tipe_motor'] = $this->input->post('tipe_motor');
		$user['nopol'] = $this->input->post('nopol');
		$user['lama_sewa'] = $this->input->post('lama_sewa');
		$user['biaya_sewa'] = $this->input->post('biaya_sewa');
		$user['keterangan'] = $this->input->post('keterangan');



		$query = $this->Motor_m->updateuser($user, $id);

		if($query){
			header('location:'.base_url('Motor_c/index'));
		}
	}

	public function hapus($id){
		$query=$this->Motor_m->deleteuser($id);

		if($query){
			header('location:'.base_url('Motor_c/index'));
		}
	}

	public function cetak_Motor()
	{
		$data['Motor'] = $this->Motor_m->get_all();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Motor";
		$this->pdf->load_view('cetak/tampil_motor',$data);
	}
}
?>