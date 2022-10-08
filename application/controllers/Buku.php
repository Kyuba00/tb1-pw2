<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('id'))) {
			redirect('user/login');
		}

		//memanggil model
		$this->load->model(array('buku_model', 'kategori_buku_model'));
	}

	public function index()
	{
		//mengarahkan ke function read
		$this->read();
	}

	public function read()
	{
		//memanggil function read pada buku model
		//function read berfungsi mengambil/read data dari table buku di database
		$data_buku = $this->buku_model->read();

		//mengirim data ke view
		$output = array(
			'judul' => 'Daftar Buku',
			'theme_page' => 'buku_read',

			//data kota dikirim ke view
			'data_buku' => $data_buku
		);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert()
	{
		//mengambil daftar kategori buku dari table kategori buku
		$data_kategori_buku = $this->kategori_buku_model->read();

		//mengirim data ke view
		$output = array(
			'judul' => 'Tambah Buku',
			'theme_page' => 'buku_insert',

			//mengirim daftar ke view
			'data_kategori_buku' => $data_kategori_buku,
		);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert_submit()
	{
		//menangkap data input dari view
		$id = $this->input->post('id');
		$kategori_buku_id = $this->input->post('kategori_buku_id');
		$judul = $this->input->post('judul');
		$stok_tersedia = $this->input->post('stok_tersedia');

		//mengirim data ke model
		$input = array(
			//format : nama field/kolom table => data input dari view
			'id' => $id,
			'kategori_buku_id' => $kategori_buku_id,
			'judul' => $judul,
			'stok_tersedia' => $stok_tersedia,
		);

		//memanggil function insert pada buku model
		//function insert berfungsi menyimpan/create data ke table buku di database
		$data_buku = $this->buku_model->insert($input);

		//mengembalikan halaman ke function read
		redirect('buku/read');
	}

	public function update()
	{
		//menangkap id data yg dipilih dari view (parameter get)
		$id = $this->uri->segment(3);

		//function read berfungsi mengambil 1 data dari table buku sesuai id yg dipilih
		$data_buku_single = $this->buku_model->read_single($id);

		//mengambil daftar kategori buku dari table kategori buku
		$data_kategori_buku = $this->kategori_buku_model->read();

		//mengirim data ke view
		$output = array(
			'judul' => 'Ubah Buku',
			'theme_page' => 'buku_update',

			//mengirim data yang dipilih ke view
			'data_buku_single' => $data_buku_single,

			//mengirim daftar kategori buku ke view
			'data_kategori_buku' => $data_kategori_buku,
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
		$kategori_buku_id = $this->input->post('kategori_buku_id');
		$judul = $this->input->post('judul');
		$stok_tersedia = $this->input->post('stok_tersedia');

		//mengirim data ke model
		$input = array(
			//format : nama field/kolom table => data input dari view
			'id' => $id,
			'kategori_buku_id' => $kategori_buku_id,
			'judul' => $judul,
			'stok_tersedia' => $stok_tersedia,
		);

		//memanggil function update pada buku model
		//function update berfungsi merubah data ke table buku di database
		$data_buku = $this->buku_model->update($input, $id);

		//mengembalikan halaman ke function read
		redirect('buku/read');
	}

	public function delete()
	{
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//memanggil function delete pada buku model
		$data_buku = $this->buku_model->delete($id);

		//mengembalikan halaman ke function read
		redirect('buku/read');
	}

	public function pie()
	{
		//memanggil function read pada kota model
		//function read berfungsi mengambil/read data dari table kota di database
		$data_buku = $this->buku_model->read();

		//mengirim data ke view
		$output = array(
			'judul' => 'Pie Chart',
			'data_buku' => $data_buku
		);

		//memanggil file view
		$this->load->view('chart_pie', $output);
	}

	public function column()
	{
		//memanggil function read pada kota model
		//function read berfungsi mengambil/read data dari table kota di database
		$data_buku = $this->buku_model->read();

		//mengirim data ke view
		$output = array(
			'theme_page' => 'chart_column',
			'judul' => 'Column Chart',
			'data_buku' => $data_buku
		);

		//memanggil file view
		$this->load->view('chart_column', $output);
	}

	public function line()
	{
		//memanggil function read pada buku model
		//function read berfungsi mengambil/read data dari table buku di database
		$data_buku = $this->buku_model->read();

		//mengirim data ke view
		$output = array(
			'judul' => 'Line Chart',
			'data_buku' => $data_buku,
		);

		//memanggil file view
		$this->load->view('chart_line', $output);
	}

	public function upload()
	{
		//menangkap id data yg dipilih dari view (parameter get)
		$id = $this->uri->segment(3);

		//function read berfungsi mengambil 1 data dari table buku sesuai id yg dipilih
		$data_buku_single = $this->buku_model->read_single($id);

		//mengambil daftar kategori buku dari table kategori buku
		$data_kategori_buku = $this->kategori_buku_model->read();

		//mengirim data ke view
		$output = array(
			'judul' => 'Cover Buku',
			'theme_page' => 'upload',

			//mengirim data yang dipilih ke view
			'data_buku_single' => $data_buku_single,

			//mengirim daftar kategori buku ke view
			'data_kategori_buku' => $data_kategori_buku,
		);

		$this->load->view('theme/index', $output);
	}

	public function submit()
	{

		//setting library upload
		$config['upload_path']          = './upload_folder/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['encrypt_name']         = TRUE;
		$this->load->library('upload', $config);

		//jika gagal upload
		if (!$this->upload->do_upload('userfile')) {

			//menangkap id data yg dipilih dari view
			$id = $this->uri->segment(3);

			//function read berfungsi mengambil 1 data dari table buku sesuai id yg dipilih
			$data_buku_single = $this->buku_model->read_single($id);

			//respon alasan kenapa gagal upload
			$response = $this->upload->display_errors();

			//mengirim output ke view
			$output = array(
				'judul' => 'Upload File',
				'response' => $response,

				'data_buku_single' => $data_buku_single,
			);
			$this->load->view('upload', $output);

			//jika upload berhasil
		} else {

			//menangkap id data yg dipilih dari view
			$id = $this->uri->segment(3);

			//respon upload berhasil 
			$cover = $this->upload->data();
			$cover = $cover['file_name'];

			//mengirim data ke model
			$input = array(
				//format : nama field/kolom table => data input dari view
				'cover' => $cover,

			);

			$data_buku = $this->buku_model->update($input, $id);

			//mengembalikan halaman ke function read
			redirect('buku/read');
		}
	}
}
