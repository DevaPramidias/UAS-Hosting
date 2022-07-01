<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentalmobil extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Mobil_m');
	}

	public function tambah()
	{
		$data['title'] = 'Rental Mobil';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/tambah_mobil');
		$this->load->view('templates/footer');

	}

	public function index()
	{
		$data['title'] = 'Rental Mobil';
		$data['rentalmobil'] = $this->Mobil_m->getAllrentalmobil();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/tampil_mobil', $data);
		$this->load->view('templates/footer');

	}

	public function insert()
	{
		$user['namapenyewa']=$this->input->post('namapenyewa');
		$user['tanggallahir']=$this->input->post('tanggallahir');
		$user['alamat']=$this->input->post('alamat');
		$user['nik']=$this->input->post('nik');
		$user['namamobil']=$this->input->post('namamobil');
		$user['nomorpolisi']=$this->input->post('nomorpolisi');
		$user['lamasewa']=$this->input->post('lamasewa');
		$user['biayasewa']=$this->input->post('biayasewa');

		$query=$this->Mobil_m->insertuser($user);
		if($query){
			header('location:'.base_url('Rentalmobil/index'));
		}
	}

	public function ubah($id){
		$data['rentalmobil'] = $this->Mobil_m->getUser($id);
		$data['title'] = 'Rental Mobil';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar',);
		$this->load->view('templates/ubah_mobil', $data);
		$this->load->view('templates/footer');

	}

	public function update($id){
		$user['namapenyewa'] = $this->input->post('namapenyewa');
		$user['tanggallahir'] = $this->input->post('tanggallahir');
		$user['alamat'] = $this->input->post('alamat');
		$user['nik'] = $this->input->post('nik');
		$user['namamobil'] = $this->input->post('namamobil');
		$user['nomorpolisi'] = $this->input->post('nomorpolisi');
		$user['lamasewa'] = $this->input->post('lamasewa');
		$user['biayasewa'] = $this->input->post('biayasewa');


		$query = $this->Mobil_m->updateuser($user, $id);

		if($query){
			header('location:'.base_url('Rentalmobil/index'));
		}
	}

	public function hapus($id){
		$query=$this->Mobil_m->deleteuser($id);

		if($query){
			header('location:'.base_url('Rentalmobil/index'));
		}
	}

	public function cetak_Rentalmobil()
	{
		$data['rentalmobil'] = $this->Mobil_m->get_all();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "rentalmobil";
		$this->pdf->load_view('cetak/tampil_mobil',$data);
	}
}
?>
