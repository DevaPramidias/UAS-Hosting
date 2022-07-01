<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minibus_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Minibus_m');
	}

	public function tambah()
	{
		$data['title'] = 'Rental Minibus';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/tambah_minibus');
		$this->load->view('templates/footer');

	}

	public function index()
	{
		$data['title'] = 'Rental Minibus';
		$data['minibus'] = $this->Minibus_m->getAllMinibus_c();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/tampil_minibus', $data);
		$this->load->view('templates/footer');

	}

	public function insert()
	{
		$user['nama_penyewa']=$this->input->post('nama_penyewa');
		$user['tanggal_lahir']=$this->input->post('tanggal_lahir');
		$user['alamat']=$this->input->post('alamat');
		$user['nik']=$this->input->post('nik');
		$user['tipe']=$this->input->post('tipe');
		$user['nomor_polisi']=$this->input->post('nomor_polisi');
		$user['lama_sewa']=$this->input->post('lama_sewa');
		$user['biaya_sewa']=$this->input->post('biaya_sewa');


		$query=$this->Minibus_m->insertuser($user);
		if($query){
			header('location:'.base_url('Minibus_c/index'));
		}
	}

	public function ubah($id){
		$data['minibus'] = $this->Minibus_m->getUser($id);
		$data['title'] = 'Rental Minibus';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar',);
		$this->load->view('templates/ubah_minibus', $data);
		$this->load->view('templates/footer');

	}

	public function update($id){
		$user['nama_penyewa'] = $this->input->post('nama_penyewa');
		$user['tanggal_lahir'] = $this->input->post('tanggal_lahir');
		$user['alamat'] = $this->input->post('alamat');
		$user['nik'] = $this->input->post('nik');
		$user['tipe'] = $this->input->post('tipe');
		$user['nomor_polisi'] = $this->input->post('nomor_polisi');
		$user['lama_sewa'] = $this->input->post('lama_sewa');
		$user['biaya_sewa'] = $this->input->post('biaya_sewa');



		$query = $this->Minibus_m->updateuser($user, $id);

		if($query){
			header('location:'.base_url('Minibus_c/index'));
		}
	}

	public function hapus($id){
		$query=$this->Minibus_m->deleteuser($id);

		if($query){
			header('location:'.base_url('Minibus_c/index'));
		}
	}

	public function cetak_Minibus()
	{
		$data['Minibus'] = $this->Minibus_m->get_all();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Motor";
		$this->pdf->load_view('cetak/tampil_minibus',$data);
	}
}
?>