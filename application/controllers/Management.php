<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Menu_model', 'menu');
	}

	public function index()
	{
		$data['title'] = 'Pelanggan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['pelanggan'] = $this->db->get('pelanggan')->result_array();

		$this->form_validation->set_rules('cid', 'CID', 'required|trim|is_unique[pelanggan.cid]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('management/index', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'cid' => $this->input->post('cid'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
			];
			$this->db->insert('pelanggan', $data);
			$this->session->set_flashdata(
				'message_pelanggan',
				'<div class="alert alert-success" role="alert">
					Tambah Pelanggan Berhasil!
				</div>'
			);
			redirect('management');
		}
	}

	public function getPelangganModal()
	{
		$data = $this->db->get_where('pelanggan', ['cid' => $_POST['id']])->row_array();
		echo json_encode($data);
	}

	public function editPelangganModal()
	{
		$data['title'] = 'Pelanggan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['pelanggan'] = $this->db->get('pelanggan')->result_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('management/index', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
			];
			$this->menu->editPelangganById($_POST['id'], $data);
			$this->session->set_flashdata(
				'message_pelanggan',
				'<div class="alert alert-success" role="alert">
					Success Edit Pelanggan!
				</div>'
			);
			redirect('management');
		}
	}

	public function deletePelangganModal()
	{
		$this->menu->deletePelangganById($this->input->post('id_s'));

		$this->session->set_flashdata(
			'message_pelanggan',
			'<div class="alert alert-success" role="alert">
				Success Delete Pelanggan!
			</div>'
		);
		redirect('management');
	}

	public function keluhan()
	{
		$data['title'] = 'Keluhan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		// $data['keluhan'] = $this->db->get('keluhan')->result_array();
		$data['keluhan'] = $this->menu->KeluhanPelanggan()->result_array();

		$this->form_validation->set_rules('id_tu', 'Id Pelanggan', 'required');
		// $this->form_validation->set_rules('floatingjp', 'Keluhan', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('management/keluhan', $data);
			$this->load->view('templates/footer');
		} else {
			$upload_image = $_FILES['image']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|heic|heif';
				$config['max_size'] = '5048';
				$config['upload_path'] = './assets/img/keluhan/';

				$this->load->library('upload', $config);
				if ($this->upload->do_upload('image')) {

					$new_image = $this->upload->data('file_name');
					$data = [
						'id_p' => $this->input->post('floatingCID'),
						'keluhan' => $this->input->post('jp'),
						'gambar' => $new_image,
						'validasi' => 1,
					];
					$this->db->insert('keluhan', $data);
					$this->session->set_flashdata(
						'message_keluhan',
						'<div class="alert alert-success" role="alert">
							Tambah Keluhan Pelanggan Berhasil!
						</div>'
					);
					redirect('management/keluhan');
				} else {
					echo $this->upload->display_errors();
				}
			} else {
				$this->session->set_flashdata(
					'message_keluhan',
					'<div class="alert alert-danger" role="alert">
						Harus Upload Image!
					</div>'
				);
				redirect('management/keluhan');
			}
		}
	}

	public function getKeluhanModal()
	{
		$data = $this->db->get_where('keluhan', ['id_keluhan' => $_POST['id']])->row_array();
		echo json_encode($data);
	}

	public function editKeluhanModal()
	{
		$data['title'] = 'Keluhan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		// $data['keluhan'] = $this->db->get('keluhan')->result_array();
		$data['keluhan'] = $this->menu->KeluhanPelanggan();

		$this->form_validation->set_rules('id_p', 'Id Pelanggan', 'required');
		$this->form_validation->set_rules('keluhan', 'Nama', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('management/keluhan', $data);
			$this->load->view('templates/footer');
		} else {
			// cek image
			$upload_image = $_FILES['image']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|heic|heif';
				$config['max_size'] = '5048';
				$config['upload_path'] = './assets/img/keluhan/';

				$this->load->library('upload', $config);
				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'default.png') {
						unlink(FCPATH . 'assets/img/keluhan/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$data = [
						'id_p' => $this->input->post('id_p'),
						'keluhan' => $this->input->post('keluhan'),
						'gambar' => $new_image,
						'validasi' => $this->input->post('validasi')
					];
					$this->menu->editKeluhanById($_POST['id'], $data);
					$this->session->set_flashdata(
						'message_keluhan',
						'<div class="alert alert-success" role="alert">
							Success Edit Keluhan Pelanggan!
						</div>'
					);
					redirect('management/keluhan');
				} else {
					echo $this->upload->display_errors();
				}
			} else {
				$data = [
					'id_p' => $this->input->post('id_p'),
					'keluhan' => $this->input->post('keluhan'),
					'validasi' => $this->input->post('validasi')
				];
				$this->menu->editKeluhanById($_POST['id'], $data);
				$this->session->set_flashdata(
					'message_keluhan',
					'<div class="alert alert-success" role="alert">
						Success Edit Keluhan Pelanggan!
					</div>'
				);
				redirect('management/keluhan');
			}
		}
	}

	public function deleteKeluhanModal()
	{
		$this->menu->deletePelangganById($this->input->post('id_s'));

		$this->session->set_flashdata(
			'message_pelanggan',
			'<div class="alert alert-success" role="alert">
				Success Delete Keluhan!
			</div>'
		);
		redirect('management/keluhan');
	}

	public function berita()
	{
		$data['title'] = 'Berita';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['berita'] = $this->db->get_where('berita', ['id_role' => $this->session->userdata('role_id')])->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('management/berita', $data);
		$this->load->view('templates/footer');
	}

	public function inputBerita()
	{
		$upload_image = $_FILES['image']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|heic|heif';
			$config['max_size'] = '5048';
			$config['upload_path'] = './assets/img/berita/';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {

				$new_image = $this->upload->data('file_name');
				$data = [
					'judul' => $this->input->post('judul'),
					'subject' => $this->input->post('subject'),
					'isi' => $this->input->post('isi'),
					'image' => $new_image,
					'tanggal' => $this->input->post('tanggal'),
					'id_role' => $this->session->userdata('role_id'),
				];
				$this->db->insert('berita', $data);
				$this->session->set_flashdata(
					'message_berita',
					'<div class="alert alert-success" role="alert">
						Tambah Berita Berhasil!
					</div>'
				);
				redirect('management/berita');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata(
				'message_berita',
				'<div class="alert alert-danger" role="alert">
					Harus Upload Image!
				</div>'
			);
			redirect('management/berita');
		}
	}

	public function getBeritaModal()
	{
		$data = $this->db->get_where('berita', ['id' => $_POST['id']])->row_array();
		echo json_encode($data);
	}

	public function editBerita($id)
	{
		$data = $this->db->get_where('berita', ['id' => $id])->row_array();
		// cek image
		$upload_image = $_FILES['image']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|heic|heif';
			$config['max_size'] = '5048';
			$config['upload_path'] = './assets/img/berita/';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$old_image = $data['berita']['image'];
				if ($old_image != 'default.png') {
					unlink(FCPATH . 'assets/img/berita/' . $old_image);
				}

				$new_image = $this->upload->data('file_name');
				$data = [
					'judul' => $this->input->post('judul'),
					'subject' => $this->input->post('subject'),
					'isi' => $this->input->post('isi'),
					'image' => $new_image,
					'tanggal' => $this->input->post('tanggal'),
					'id_role' => $this->session->userdata('role_id'),
				];
				$this->menu->editBeritaById($_POST['id'], $data);
				$this->session->set_flashdata(
					'message_keluhan',
					'<div class="alert alert-success" role="alert">
			Success Edit Keluhan Pelanggan!
		</div>'
				);
				redirect('management/berita');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$data = [
				'judul' => $this->input->post('judul'),
				'subject' => $this->input->post('subject'),
				'isi' => $this->input->post('isi'),
				'tanggal' => $this->input->post('tanggal'),
				'id_role' => $this->session->userdata('role_id'),
			];
			$this->menu->editBeritaById($_POST['id'], $data);
			$this->session->set_flashdata(
				'message_keluhan',
				'<div class="alert alert-success" role="alert">
			Success Edit Keluhan Pelanggan!
		</div>'
			);
			redirect('management/berita');
		}
	}

	public function deleteBeritaModal()
	{
		$this->menu->deletePelangganById($this->input->post('id_s'));

		$this->session->set_flashdata(
			'message_berita',
			'<div class="alert alert-success" role="alert">
				Success Delete Berita!
			</div>'
		);
		redirect('management/berita');
	}
}
