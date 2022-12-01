<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'mm');
	}

	public function index()
	{
		$data['title'] = 'Home';

		$this->form_validation->set_rules('cid', 'CID', 'required');
		// $this->form_validation->set_rules('floatingjp', 'Keluhan', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/frondendHeader', $data);
			$this->load->view('pelayanan/index', $data);
			$this->load->view('templates/frondendFooter');
		} else {
			$upload_image = $_FILES['image']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|heic|heif';
				$config['max_size'] = '5048';
				$config['upload_path'] = './assets/img/keluhan/';

				$this->load->library('upload', $config);
				if ($this->upload->do_upload('image_1')) {
					$new_image = $this->upload->data('file_name');
					$data = [
						'id_p' => $this->input->post('cid'),
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
					// redirect('pelayanan');
				} else {
					echo $this->upload->display_errors();
				}
			}else{
				$this->session->set_flashdata(
					'message_keluhan',
					'<div class="alert alert-danger" role="alert">
						Harus Upload Image!
					</div>'
				);
				// redirect('pelayanan');
			}
		}
	}

	public function getDPelangan()
	{
		$keyword = $_GET['query'];
		$data = $this->mm->getAutoSearch($keyword);
		$datane = [];
		foreach ($data as $d) {
			$row = array();
			$row['value'] = $d['cid'];
			$row['nama'] = $d['cid'];
			$row['name'] = $d['nama'];
			$row['alamat'] = $d['alamat'];
			$datane[] = $row;
		}
		$output = array(
			"suggestions" => $datane,
		);

		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function getChekDPelangan()
	{
		$keyword = $_POST['query'];
		$data = $this->mm->getAutoSearch($keyword);

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function keluhan()
	{
		$data['title'] = 'Keluhan';
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/keluhan', $data);
		$this->load->view('templates/frondendFooter');
	}

	public function informasi_keluhan()
	{
		$data['title'] = 'Informasi Keluhan';
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/informasi_keluhan', $data);
		$this->load->view('templates/frondendFooter');
	}

	public function artikel()
	{
		$data['title'] = 'Artikel';
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/artikel', $data);
		$this->load->view('templates/frondendFooter');
	}

	public function tentang_kami()
	{
		$data['title'] = 'Tentang Kami';
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/tentang_kami', $data);
		$this->load->view('templates/frondendFooter');
	}

	public function hubungi_kami()
	{
		$data['title'] = 'Hubungi Kami';
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/hubungi_kami', $data);
		$this->load->view('templates/frondendFooter');
	}
}
