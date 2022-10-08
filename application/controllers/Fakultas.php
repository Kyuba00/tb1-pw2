<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fakultas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		//memanggil model
		$this->load->model('fakultas_model');
	}

	public function index()
	{
		//mengarahkan ke function read
		$this->read();
	}

	public function read()
	{
		//memanggil function read pada fakultas model
		//function read berfungsi mengambil/read data dari table fakultas di database
		$data_fakultas = $this->fakultas_model->read();

		//mengirim data ke view
		$output = array(
			//memanggil view
			'judul' => 'Daftar Fakultas',
			'theme_page' => 'fakultas_read',

			//data fakultas dikirim ke view
			'data_fakultas' => $data_fakultas
		);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert()
	{
		//mengirim data ke view
		$output = array(
			//memanggil view
			'judul' => 'Tambah fakultas',
			'theme_page' => 'fakultas_insert',
		);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert_submit()
	{
		//menangkap data input dari view
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');

		//mengirim data ke model
		$input = array(
			//format : nama field/kolom table => data input dari view
			'id' => $id,
			'nama' => $nama,
		);

		//memanggil function insert pada fakultas model
		//function insert berfungsi menyimpan/create data ke table fakultas di database
		$data_fakultas = $this->fakultas_model->insert($input);

		//mengembalikan halaman ke function read
		redirect('fakultas/read');
	}

	public function update()
	{
		//menangkap id data yg dipilih dari view (parameter get)
		$id = $this->uri->segment(3);

		//function read berfungsi mengambil 1 data dari table fakultas sesuai id yg dipilih
		$data_fakultas_single = $this->fakultas_model->read_single($id);

		//mengirim data ke view
		$output = array(
			'judul' => 'Ubah Fakultas',
			'theme_page' => 'fakultas_update',

			//mengirim data fakultas yang dipilih ke view
			'data_fakultas_single' => $data_fakultas_single,
		);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function update_submit()
	{
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//menangkap data input dari view
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');

		//mengirim data ke model
		$input = array(
			//format : nama field/kolom table => data input dari view
			'id' => $id,
			'nama' => $nama,
		);

		//memanggil function insert pada fakultas model
		//function insert berfungsi menyimpan/create data ke table fakultas di database
		$data_fakultas = $this->fakultas_model->update($input, $id);

		//mengembalikan halaman ke function read
		redirect('fakultas/read');
	}

	public function delete()
	{
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//memanggil function delete pada fakultas model
		$data_fakultas = $this->fakultas_model->delete($id);

		//mengembalikan halaman ke function read
		redirect('fakultas/read');
	}

	public function read_export()
	{
		//memanggil function read pada fakultas model
		//function read berfungsi mengambil/read data dari table fakultas di database
		$data_fakultas = $this->fakultas_model->read();

		//mengirim data ke view
		$output = array(
			//memanggil view
			'judul' => 'Daftar fakultas',

			//data fakultas dikirim ke view
			'data_fakultas' => $data_fakultas
		);

		//memanggil file view
		$this->load->view('fakultas_read_export', $output);
	}

	public function data_export()
	{
		//memanggil function read pada fakultas model
		//function read berfungsi mengambil/read data dari table fakultas di database
		$data_fakultas = $this->fakultas_model->read();

		//mengirim data ke view
		$output = array(
			//memanggil view
			'judul' => 'Daftar Fakultas',

			//data fakultas dikirim ke view
			'data_fakultas' => $data_fakultas
		);

		//memanggil file view
		$this->load->view('fakultas_data_export', $output);
	}
}
