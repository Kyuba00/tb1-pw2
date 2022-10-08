<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_buku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		//memanggil model
		$this->load->model('kategori_buku_model');
	}

	public function index()
	{
		//mengarahkan ke function read
		$this->read();
	}

	public function read()
	{
		//memanggil function read pada kategori buku model
		//function read berfungsi mengambil/read data dari table kategori buku di database
		$data_kategori_buku = $this->kategori_buku_model->read();

		//mengirim data ke view
		$output = array(
			//memanggil view
			'judul' => 'Daftar Kategori Buku',
			'theme_page' => 'kategori_buku_read',

			//data kategori buku dikirim ke view
			'data_kategori_buku' => $data_kategori_buku
		);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert()
	{
		//mengirim data ke view
		$output = array(
			//memanggil view
			'judul' => 'Tambah Kategori Buku',
			'theme_page' => 'kategori_buku_insert',
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
			'nama' => $nama,
			'id' => $id,
		);

		//memanggil function insert pada kategori buku model
		//function insert berfungsi menyimpan/create data ke table kategori buku di database
		$data_kategori_buku = $this->kategori_buku_model->insert($input);

		//mengembalikan halaman ke function read
		redirect('kategori_buku/read');
	}

	public function update()
	{
		//menangkap id data yg dipilih dari view (parameter get)
		$id = $this->uri->segment(3);

		//function read berfungsi mengambil 1 data dari table kategori buku sesuai id yg dipilih
		$data_kategori_buku_single = $this->kategori_buku_model->read_single($id);

		//mengirim data ke view
		$output = array(
			'judul' => 'Ubah Kategori Buku',
			'theme_page' => 'kategori_buku_update',

			//mengirim data kategori buku yang dipilih ke view
			'data_kategori_buku_single' => $data_kategori_buku_single,
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
			'nama' => $nama,
			'id' => $id,
		);

		$data_kategori_buku = $this->kategori_buku_model->update($input, $id);

		//mengembalikan halaman ke function read
		redirect('kategori_buku/read');
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$data_kategori_buku = $this->kategori_buku_model->delete($id);

		redirect('kategori_buku/read');
	}
}
