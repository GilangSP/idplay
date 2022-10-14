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

	public function editMenuModal()
	{
		$data['title'] = 'Pelanggan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['pelanggan'] = $this->db->get('pelanggan')->result_array();

		$this->form_validation->set_rules('cid', 'CID', 'required');
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
			$this->menu->editMenuById($_POST['cid'], $data);
			$this->session->set_flashdata(
				'message_pelanggan',
				'<div class="alert alert-success" role="alert">
					Success Edit Pelanggan!
				</div>'
			);
			redirect('management');
		}
	}

	public function deleteMenuModal()
	{
		$this->menu->deleteMenuById($this->input->post('id_s'));

		$this->session->set_flashdata(
			'message_pelanggan',
			'<div class="alert alert-success" role="alert">
				Success Delete Pelanggan!
			</div>'
		);
		redirect('management');
	}
}
